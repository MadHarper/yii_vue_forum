import Vue from 'vue'
import Router from 'vue-router'
import General from '../components/General.vue'
import Delete from '../components/Delete.vue'
import Subcategory from '../components/Subcategory.vue'


Vue.use(Router)


export default new Router({
  routes: [
    { path: '/', component: General },
    { path: '/:subcategory', component: Subcategory }
  ],
  mode: 'history'
})
