import Vue from 'vue'
import Vuikit from 'vuikit'
import App from './App.vue'
import router from './router'
import store from './vuex'


Vue.use(Vuikit)

Vue.config.debug = true

new Vue({
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: { App }
  //render: h => h(App)
})
