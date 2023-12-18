<script setup>
import { RouterLink, RouterView} from 'vue-router'

</script>

<template>
  <div class="content">
    <div class="left"> 
      <nav>
        <div class="left-header">
      <h2>VINCE MARIE C. DEGUMA</h2>
      <p>FINALS PROJECT</p>
      </div>
      <div class="links">
        <div class="a">
          <RouterLink to="/home">Home</RouterLink>
        </div>
        <div class="a">
          <RouterLink to="/recipes">Add a Recipe</RouterLink>
        </div>
        <div class="a">
          <RouterLink to="/category">Categories</RouterLink>
        </div>
      </div>
      </nav>
    </div>

  <div class="right">
    <RouterView />
  </div>
  </div>
</template>

<style scoped>
.links {
  max-height: 50vh;
  padding: 10px;
}
.left-header {
  text-align: center;
  line-height: 1;
  border-bottom: 1px solid;
}
.story2 {
        width: 10vw;
        text-align: center;
        padding: 10em 2.5em 0px;
    }
.content {  
  display: flex;
  font-family:sans-serif;
}
.left {
  background-color: rgb(0, 0, 0);
  color: white;
  height: 100vh;
  width: 20vw;
}

.right {
  background-color:rgb(225, 225, 225);
    height: 100vh;
    width: 100%;
    overflow: auto;
}
nav {
  line-height: 2;
  width: 100%;
}

nav a.RouterLink {
  text-decoration: none;
}
nav a:hover {
  background-color: rgba(255, 255, 255, 0.63);
  padding: 10px;
  border-radius: 10px;
  transition:.5s;
  color: rgb(0, 0, 0);
}

nav a.router-link-exact-active {
  color: var(--color-text);
}

nav a {
  text-decoration: none;
  padding: 0 1rem;
  text-align: center;
}
.a {
  text-align: center;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  nav {
    font-size: 1.2em;
    padding: 1rem 0;
    }
}
</style>
