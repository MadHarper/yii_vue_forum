import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        authState: {}
    },
    actions: {
        checkAuthState({commit}, note) {
            const api_url = '/authdate'
            axios.get(api_url)
                .then((response) => {
                    commit('RENEW_AUTH_STATE', response.data)
                })
                .catch((error) => {
                    ;
                });
        }
    },
    mutations: {
        RENEW_AUTH_STATE: function(state, newdate) {
            state.authState = newdate
        }
    },
    getters: {
        authDate(state) {
            return state.authState
        }
    },
    modules: {}
})