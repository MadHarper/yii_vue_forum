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
                            Форма
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

    export default {
        name: "Auth",
        data: function () {
            return {
            }
        },
        props: ['authDate'],
        methods: {
        },
        mounted() {

        }
    }
</script>