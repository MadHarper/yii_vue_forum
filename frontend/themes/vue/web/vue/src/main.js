import Vue from 'vue'
import Vuikit from 'vuikit'
import App from './App.vue'
import router from './router'


Vue.use(Vuikit)

Vue.config.debug = true

new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
  //render: h => h(App)
})
