<template>
    <div>
        <div class="header">
            <img class="food" src="../assets/bg.jpg" alt="Just Food">
            <div class="intro">
               <h1>Cookbook!</h1>
            </div>
        </div>
        <div class="container">
            <div class="upload">
                <h4>RECIPES</h4>
                <form @submit.prevent="addRecipe()">
                    <div class="mb-3">
                        <label for="lastName">Recipe Title</label>
                        <input type="text" v-model="recipes.recipe_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="firstName">Description</label>
                        <input type="text" v-model="recipes.description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="program">Ingredients</label>
                        <input type="text" v-model="recipes.ingredients" class="form-control">
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
                      </tr>
                  </thead>
                  <tbody>
                      <tr v-for="recipe in recipes" :key="recipe.id">
                          <td>{{recipe.id}}</td>
                          <td>{{recipe.recipe_title}}</td>
                          <td>{{recipe.description}}</td>
                          <td>{{recipe.ingredients}}</td>
                      </tr>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
  </template>

  <script>
  export default {
      data() {
          return {
              recipes: {
                recipe_title: '',
                description: '',
                ingredients: ''
              }
          }
      },
      methods: {
        getData() {
            fetch("http://localhost:8000/api/recipes")
            .then((data)  =>  data.json())
            .then((data)  =>  (this.recipes=data))
            .catch((err)  => console.log(err));
        },
      },
      mounted() {
        this.getData();
      },
      addRecipe() {
            this.recipes.push(this.recipes)
            this.recipes = {
                id:null,
                recipe_title: '',
                description: '',
                ingredients: '',
            }
        }
  }
  </script>
  <style scoped>
    .intro {
    position: absolute;
    transform: translateY(-110%);
    padding: 10px;
    text-shadow: 2px 5px 3px rgb(0, 0, 0);
    color: white;
  }
    .food {
    width: 100%;
    height: 15vh;
  }
  .upload {
    padding: 15px 20px;
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
  }
.table-recipes {
    margin: 20px;
    font-family: 'Arial', sans-serif;
}

.table-recipes table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
}

.table-recipes th {
    background-color: rgb(0, 255, 94);
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.table-recipes td {
    border: 1px solid #ddd;
    padding: 8px;
}

.table-recipes tbody tr:hover {
    background-color: #19570e;
    color: white;
}
    </style>
  
