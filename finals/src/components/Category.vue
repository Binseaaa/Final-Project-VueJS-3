<template>
  <div class="main">
    <div class="card" style="width: 18rem;">
      <img src="../assets/bfast.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Breakfast</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a @click="goToBreakfastRecipes" class="btn btn-primary">Go to recipes</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="../assets/lunch.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lunch</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a @click="goToLunchRecipes" class="btn btn-primary">Go to recipes</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="../assets/dinner.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dinner</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a @click="goToDinnerRecipes" class="btn btn-primary">Go to recipes</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="../assets/dessert.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dessert</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a @click="goToDessertRecipes" class="btn btn-primary">Go to recipes</a>
      </div>
    </div>     
  </div>

</template>

<script setup>
import { useRouter } from 'vue-router';

const router = useRouter();

const goToBreakfastRecipes = () => {
  router.push('/breakfast');
};

const goToLunchRecipes = () => {
  router.push('/lunch');
};

const goToDinnerRecipes = () => {
  router.push('/dinner');
};

const goToDessertRecipes = () => {
  router.push('/dessert');
};
</script>

<style scoped>
  .main {
    display: flex;
    gap: 10px;
    padding: 10px;
    justify-content: space-between;
  }

  .card {
    border-radius: 2em;
  }

  img {
    height: 30vh;
  }
</style>
