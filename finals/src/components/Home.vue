<template>
  <div class="container">
    <div class="content">
      <div class="reserve">
        <img class="food" src="../assets/bg.jpg" alt="Just Food">
        <div class="intro">
          <h1>Welcome to Beans Cookbook!</h1>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
          <a href="./recipes"><button>Add a recipe!</button></a>
        </div>
      </div>
        <div class="welcome">
          <div class="text">
            <h2>Welcome</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
          <div class="img">
            <img src="../assets/cook.jpg" alt="">
          </div>
        </div>
      <div class="menu-container">
          <h1>Food!</h1>
          <div class="foods">
          <div class="food-item">
            <img src="../assets/fries.jpg" alt="">
            <div class="just-food">Fries</div>
          </div>

          <div class="food-item">
            <img src="../assets/hamburger.jpg" alt="">
            <div class="just-food">Hamburger</div>
          </div>

          <div class="food-item">
            <img src="../assets/pizza.jpg" alt="">
            <div class="just-food">Pizza</div>
          </div>
        </div>
        </div>
    </div>
  </div>
</template>

<style scoped>
.container {
  padding: 0;
  margin: 0;
}
.foods img {
  height: 30vh;
  width: 20vw;
  border-radius: 15px;
  background-color: rgb(255, 255, 255);
  padding: 10px 10px 50px;
}
.foods {
  padding: 1em;
  display: flex;
  justify-content: space-evenly;
}
.food-item {
      position: relative;
      cursor: pointer;
    }
.food-item:hover .just-food {
      display: block;
    }
.just-food {
      display: none;
      position: absolute;
      bottom: 0;
      padding: 10px;
      border-radius: 5px;
      font-size: 1.5em;
    }

.menu-container {
  background-color: rgba(60, 210, 52, 0.531);
  border-radius: 1em;
  padding: 10px;
  max-width: 90%;
  height: 100%;
  margin: auto;
  text-align: center;
  margin-bottom: 1em;
}
.text {
  max-width: 50%;
  margin-right: 1em;
}
.text h2 {
  color: rgb(0, 255, 94);
  text-shadow: 2px 0px 1px black;
}
.img img{
  max-width: 100%;
  height: 100%;
  background-color: blue;
  border-radius: 1em;
}
.welcome {
  max-width: 50%;
  height: 30vh;
  text-align: justify;
  display: flex;
  margin: auto;
  margin-bottom: 5em;
}
  .food {
    width: 100%;
    height: 50vh;
  }

  .reserve {
    position: relative;
    text-align: center;
    color: rgb(0, 255, 94);
    line-height: 1em;
    margin-bottom: 5em;
  }
  button {
    background-color: rgb(0, 255, 94);
    font-size: 1em;
    border-radius: 25px;
    border: none;
    padding: 15px;
    cursor: pointer;
  }
  button:hover {
    background-color:  rgba(0, 207, 41, 0.999);
    color: white;
  }

  .intro h4 {
    color: white;
    font-size: 1em;
  }
  .intro {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-shadow: 2px 5px 3px black;
  }
</style>
