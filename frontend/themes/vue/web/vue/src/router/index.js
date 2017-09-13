import Vue from 'vue'
import Router from 'vue-router'
import General from '../components/General.vue'
import Delete from '../components/Delete.vue'


Vue.use(Router)

export default new Router({
  routes: [
    { path: '/', component: General },
    { path: '/delete', component: Delete }
  ]
})
