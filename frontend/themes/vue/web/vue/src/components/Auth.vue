<template>

    <!-- если авторизован -->
    <ul class="nav navbar-nav navbar-right" v-if="authDate.isAuth">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ authDate.user_name }}<span class="glyphicon glyphicon-user pull-right"></span></a>
            <ul class="dropdown-menu user_service">
                <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                <li class="divider"></li>
                <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Выйти <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
            </ul>
        </li>
        <li class="top_grlyph">
            <a href="#">
                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                <span class="animated flash badge globalNotificationCount right" id="globMesCnt">4</span>
            </a>
        </li>

        <li class="top_grlyph">
            <a href="#" id="last_glyph"><span class="glyphicon glyphicon-globe"   aria-hidden="true"></span>
                <span class="animated flash badge messagelNotificationCount right" id="mesMesCnt">12</span>
            </a>
        </li>

    </ul>
    <!-- конец если авторизован -->



    <!-- если НЕ авторизован -->
    <ul class="nav navbar-nav navbar-right" v-else>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Войти <span class="caret"></span></a>
            <ul class="dropdown-menu enter_sandman">
                <li>
                    <div class="input-group login_div">


                        <div class="alert alert-danger">
                            Ошибки
                        </div>
                            <!-- Форма авторизации -->

                                <form id="login-form" action="" role="form" @submit.prevent="submitMe">
                                    <input type="hidden" name="_csrf-frontend" value="25wkvi-DVLI5eQ___rAcPLrOYQMSBSqbadT6T_cbFEz2fJcjFGf-9IfqYvAJ2AOpHIOJJPqUEDn4qzmTBP2bGQ==">
                                    <div class="form-group field-loginform-username required has-success">
                                        <label class="control-label" for="loginform-username">Username</label>
                                        <input v-model="LoginForm.username" type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus="" aria-required="true" aria-invalid="false">

                                        <p class="help-block help-block-error"></p>
                                    </div>
                                    <div class="form-group field-loginform-password required has-success">
                                        <label class="control-label" for="loginform-password">Password</label>
                                        <input v-model="LoginForm.password" type="password" id="loginform-password" class="form-control" name="LoginForm[password]" aria-required="true" aria-invalid="false">

                                        <p class="help-block help-block-error"></p>
                                    </div>
                                    <div class="form-group field-loginform-rememberme">
                                        <div class="checkbox">
                                            <label for="loginform-rememberme">
                                                <input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                                Remember Me
                                            </label>
                                            <p class="help-block help-block-error"></p>

                                        </div>
                                    </div>
                                    <div style="color:#999;margin:1em 0">
                                        If you forgot your password you can <a href="/site/request-password-reset">reset it</a>.
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="login-button">Login</button>                </div>

                                </form>


                            <!-- Конец формы авторизации -->
                        <button type="submit" class="btn btn-default btn_submit">Войти</button>

                    </div><!-- /input-group -->
                </li>
            </ul>
        </li>
        <li><a href="#">Регистрация</a></li>
    </ul>
    <!-- конец если не авторизован -->

</template>


<script>

    import axios from 'axios'



    export default {
        name: "Auth",
        data: function () {
            return {
                LoginForm: {
                    username: '',
                    password: ''
                }
            }
        },
        //props: ['authDate'],
        methods: {
            submitMe: function(){

                const data = new FormData();
                data.append('LoginForm[username]', this.LoginForm.username);
                data.append('LoginForm[password]', this.LoginForm.password);
                data.append('_csrf-frontend', $('meta[name="csrf-token"]').attr("content"));


                axios.post('/login', data)
                    .then((response) => {
                        if(response.data.result){
                            this.$store.dispatch('checkAuthState') //если авторизация успешна обновляем хранилище с данными юзера
                        }
                    })
                    .catch((error) => {
                        console.log(error); // выводим ошибку в консоль , если что-то пошло не так
                    });
            }
        },
        mounted() {

        },
        computed: {
            authDate() {
                return this.$store.getters.authDate;
            }
        },
    }
</script>