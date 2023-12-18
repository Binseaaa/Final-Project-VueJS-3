import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import CategoriesView from '../views/CategoriesView.vue'
import RecipesView from '../views/RecipesView.vue'
import Breakfast from '../components/categories/Breakfast.vue'
import Lunch from '../components/categories/Lunch.vue'
import Dinner from '../components/categories/Dinner.vue'
import Dessert from '../components/categories/Dessert.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      redirect: { name: 'home' }
    },
    {
      path: '/home',
      name: 'home',
      component: HomeView
    },
    {
      path: '/category',
      name: 'category',
      component: CategoriesView
    },
    {
      path: '/recipes',
      name: 'recipes',
      component: RecipesView
    },
    {
      path: '/' , component: CategoriesView},
      {path: '/breakfast', component: Breakfast},
      {path: '/lunch', component: Lunch},
      {path: '/dinner', component: Dinner},
      {path: '/dessert', component: Dessert}
  ]
})

export default router
