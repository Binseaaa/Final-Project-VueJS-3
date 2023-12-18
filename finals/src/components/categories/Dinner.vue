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
  
  const fetchData = async () => {
    const categoryType = 'dinner'; // Set the desired category type
    try {
      const response = await fetch(`http://localhost:8000/api/categories/${categoryType}`);
      const data = await response.json();
      categories.value = data;
    } catch (error) {
      console.error('Error fetching categories:', error);
    }
  };
  
  onMounted(() => {
    fetchData();
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
  