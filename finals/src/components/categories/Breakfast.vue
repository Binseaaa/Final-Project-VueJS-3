<template>
  <div>
    <a href="http://localhost:5173/category"><button class="btn btn-primary">Back</button></a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Recipe Name</th>
          <th>Categories</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="category in categories" :key="category.id">
          <td>{{ category.id }}</td>
          <td>{{ category.recipe ? category.recipe.recipe_title : 'N/A' }}</td>
          <td>{{ category.categories }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const categories = ref([]);
const lastFetchTimestamp = ref(0); // Initialize with zero

const fetchData = async () => {
  const categoryType = 'breakfast';
  try {
    const response = await fetch(`http://localhost:8000/api/categories/${categoryType}`);
    const data = await response.json();
    categories.value = data;
    lastFetchTimestamp.value = Date.now(); // Update timestamp
    console.log('Data fetched:', data);
  } catch (error) {
    console.error('Error fetching categories:', error);
  }
};

onMounted(() => {
  const oneHourInMilliseconds = 60 * 60 * 1000; // 1 hour
  const shouldFetchData = Date.now() - lastFetchTimestamp.value > oneHourInMilliseconds;

  if (shouldFetchData) {
    fetchData();
  }
});
</script>

<style scoped>
  .table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  button{
    margin: 10px;
  }
</style>
