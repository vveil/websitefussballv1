import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
// import Formular from '../views/formular.vue'

Vue.use(VueRouter)

  const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/formular',
    name: 'Formular',
    component: () => import(/* webpackChunkName: "formular" */ '../views/formular.vue')
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/login',
    name: 'Vereinslogin',
    component: () => import(/* webpackChunkName: "adminlogin" */ '../views/adminlogin.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router
