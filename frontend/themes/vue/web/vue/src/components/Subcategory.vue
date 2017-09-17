<template>

    <div class="row" id="central">
        <div class="col-md-12 theme forum-list">


            <div class="row">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">{{ sub.name }}</div>


                </div>


                <div class="panel panel-default">
                    <li class="list-group-item" v-for="theme in sub.themes">

                        <div class="row">
                            <div class="col-md-6 headliner">
                                <div class="upper_info">
                                    <a href="/posts/4">
                                        {{ theme.title }}
                                    </a>
                                </div>
                                <div class="sub_info">Автор: Clide 5 окт. 2016</div>
                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-md-2">
                                <div class="sub_info_strong">Mr.Dead</div>
                                <div class="sub_info">2017-05-14T17:22:33+03:00</div>
                            </div>
                        </div>
                    </li>

                </div>
            </div>


        </div>
    </div>

</template>


<script>

    import axios from 'axios'


    export default {
        name: "Subcategory",
        data () {
            return {
                sub: []
            }
        },
        methods: {
            testApi: function(slug) {
                const api_url = '/subcategory/' + slug

                // делаем GET запрос
                axios.get(api_url)
                    .then((response) => {
                        console.log(response.data[0]);
                        this.sub = response.data[0];
                    })
                    .catch((error) => {
                        console.log(error); // выводим ошибку в консоль , если что-то пошло не так
                    });
            }
        },
        mounted() {
            this.testApi(this.$route.params.subcategory) // вызываем наш метод с параметром id из URL
        }
    }
</script>