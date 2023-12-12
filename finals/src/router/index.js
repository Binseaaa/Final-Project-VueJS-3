import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import CustomersView from '../views/CustomersView.vue'
import RecipesView from '../views/RecipesView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/home',
      name: 'home',
      component: HomeView
    },
    {
      path: '/customer',
      name: 'customers',
      component: CustomersView
    },
    {
      path: '/recipes',
      name: 'recipes',
      component: RecipesView
    }
  ]
})

export default router
