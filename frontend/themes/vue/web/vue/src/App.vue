<template>
  <div class="back">

    <div class="container-fluid wrap">
      <div class="row">
        <div class="col-md-12 top">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand!</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><router-link to="/">Главная</router-link><span class="sr-only">(current)</span></a></li>
                    <li><router-link to="/delete">Delete</router-link></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>


                  <auth :authDate="authDate"></auth>>

                </div>
              </div>



            </nav>
        </div>
      </div>

      <div class="row" id="main">

        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Library</a></li>
              <li class="active">Data</li>
            </ol>
          </div>
        </div>



        <router-view></router-view>



        <div class="col-md-12 gfooter">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol>
        </div>
      </div>



    </div>
  </div>

</template>

<script>
import General from './components/General.vue'
import Delete from './components/Delete.vue'
import Auth from './components/Auth.vue'
import axios from 'axios'

export default {
  name: 'app',
  components: { General, Auth, Delete },
  data () {
    return {
        authDate: {isAuth: false}
    }
  },
  methods: {
      authApi: function(id) {
          const api_url = '/authdate'

          // делаем GET запрос
          axios.get(api_url)
              .then((response) => {
                  console.log(response.data);
                  this.authDate = response.data;
              })
              .catch((error) => {
                  ; // выводим ошибку в консоль , если что-то пошло не так
              });
      }
  },
  mounted() {
      this.authApi()
  }
}
</script>
