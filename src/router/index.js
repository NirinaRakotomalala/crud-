import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Editer from '../components/Editer.vue'
import Modifier from '../components/Modifier.vue'
import Creer from '../components/Creer.vue'
import Supprimer from '../components/Supprimer.vue'
import Login from '../components/Login.vue'
import Logout from '../components/Logout.vue'
const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },

  { path: '/login', name: 'Login', component: Login },
  { path: '/logout', name: 'Logout', component: Logout },
  {
    path: '/about',
    name: 'About',
    component: About,
  },
  {
    path: '/creer',
    name: 'Creer',
    component: Creer,
  },
  {
    path: '/editer',
    name: 'Editer',
    component: Editer,
  },
  {
    path: '/modifier/:id',
    name: 'Modifier',
    component: Modifier,
  },
  {
    path: '/supprimer',
    name: 'Supprimer',
    component: Supprimer,
  },
]

const router = createRouter({
  history: createWebHashHistory(process.env.BASE_URL),
  routes,
})

export default router
