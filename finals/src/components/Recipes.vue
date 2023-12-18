<template>
    <div>
        <div class="header">
            <img class="food" src="../assets/food.png" alt="Just Food">
        </div>
        <div class="container">
            <div class="upload">
                <form @submit.prevent="addRecipe">
                    <div class="mb-3">
                        <label for="recipe_title">Recipe Title</label>
                        <input type="text" v-model="recipes.recipe_title" class="form-control" placeholder="Enter Recipe Title">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" v-model="recipes.description" class="form-control" placeholder="Enter Recipe Description">
                    </div>
                    <div class="mb-3">
                        <label for="ingredients">Ingredients</label>
                        <input type="text" v-model="recipes.ingredients" class="form-control" placeholder="Enter Recipe Ingredients">
                    </div>
                    <button type="submit" class="btn btn-primary">UPLOAD</button>
                </form>
            </div>
            <div class="table-recipes">
                <table>
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Recipe Title</th>
                          <th>Description</th>
                          <th>Ingredients</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr v-for="recipe in recipes" :key="recipe.id">
                          <td>{{recipe.id}}</td>
                          <td>{{recipe.recipe_title}}</td>
                          <td>{{recipe.description}}</td>
                          <td>{{recipe.ingredients}}</td>
                          <td>
                            <button type="button" class="delete-Btn" data-bs-toggle="modal" data-bs-target="#deleteModal" @click="confirmDelete(recipe.id)">Delete</button></td>
                      </tr>
                  </tbody>
              </table>
            </div>
        </div>
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure you want to delete this recipe?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Please enter the password.</p>
                    <input v-model="password" type="password" placeholder="Enter password" />
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="delete-Btn" data-bs-dismiss="modal" @click="deleteRecipe">Confirm Delete</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
  </template>

<script setup>
import { ref, onMounted } from 'vue';

const recipes = ref({
  recipe_title: '',
  description: '',
  ingredients: ''
});

const isSubmitted = ref(false);
const showPasswordModal = ref(false);
const password = ref('');
const recipeToDelete = ref(null);  

const resetValidation = () => {
  isSubmitted.value = false;
};

const getData = () => {
  fetch("http://localhost:8000/api/recipes")
    .then((data) => data.json())
    .then((data) => (recipes.value = data))
    .catch((err) => console.log(err));
};

onMounted(() => {
  getData();
});

const addRecipe = () => {
  isSubmitted.value = true;

  fetch("http://localhost:8000/api/recipes", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      recipe_title: recipes.value.recipe_title,
      description: recipes.value.description,
      ingredients: recipes.value.ingredients,
    }),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error('Validation error');
      }
      return response.json();
    })
    .then((data) => {
      recipes.value.recipe_title = '';
      recipes.value.description = '';
      recipes.value.ingredients = '';

      showPasswordModal.value = false;

      getData();

      window.alert(`Recipe ${data.recipe_title} uploaded successfully!`);
    })
    .catch((err) => {
      console.log(err);

      window.alert('Validation error. Please check your input.');
    });
};


const confirmDelete = (recipeId) => {
  showPasswordModal.value = true;
  recipeToDelete.value = recipeId;
};

const deleteRecipe = () => {
  if (password.value === 'password') {
    fetch(`http://localhost:8000/api/recipes/${recipeToDelete.value}`, {
      method: 'DELETE',
    })
      .then(() => {
        recipes.value = recipes.value.filter((recipe) => recipe.id !== recipeToDelete.value);
        showPasswordModal.value = false;
        password.value = '';

        window.alert(`Recipe with ID ${recipeToDelete.value} deleted successfully!`);
      })
      .catch((err) => console.log(err));
  } else {
    window.alert('Incorrect password');
  }
};

</script>

<style scoped>
  .delete-Btn {
  background-color: #ab3028; 
  color: white; 
  border: none; 
  padding: 8px 16px;
  text-align: center; 
  text-decoration: none; 
  display: inline-block; 
  font-size: 14px; 
  cursor: pointer; 
  border-radius: 4px; 
}

.delete-Btn:hover {
  background-color: #ff0000;
}

    .food {
    width: 100%;
    height: 15vh;
  }
  .upload {
    padding: 15px 20px;
    position: sticky;
    top: 0;
  }
  form {
  width: 100%;
  margin: 0 auto;
}

.mb-3 {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

.input-group {
  margin-bottom: 20px;
}

.form-control {
  width: 15vw;
  padding: 8px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #0056b3;
}
  .container {
    display: flex;
    overflow: hidden;
  }

.table-recipes {
    margin: 10px;
    height: 80vh;
    overflow-y: auto;
}

.table-recipes table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
}

.table-recipes th {
    background-color: rgb(62, 179, 33);
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.table-recipes td {
    border: 1px solid #ddd;
    padding: 8px;
}
.table-recipes tbody tr:nth-child(odd) {
  background-color: #9dbb9d9f;
}

.table-recipes tbody tr:nth-child(even) {
  background-color: #ffffff;
}

.modal-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  z-index: 1000; 
}

.modal-content {
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  z-index: 1001;
}

.modal-content input {
  padding: 10px;
  border-radius: 5px;
}

.button-container {
  display: flex;
  justify-content: space-between; 
  margin-top: 20px;
}

.button-container button {
  padding: 10px;
  border: none;
  cursor: pointer;
}

</style>
  
