<template>

<div class="row" id="central">
    <div class="col-md-9 theme forum-list">



        <div class="row" v-for="category in categories">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">{{ category.name }}</div>
                <!-- List group -->
                <ul class="list-group">

                    <li class="list-group-item" v-for="sub in category.childs">
                        <router-link :to="sub.link">{{ sub.name }}</router-link>
                    </li>

                </ul>
            </div>
        </div>

    </div>

    <div class="col-md-3 theme side">
        <div class="row">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Panel heading</div>
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
                    </h4>
                </div>
                <!-- List group -->
                <div id="collapse1" class="panel-collapse collapse">
                    <ul class="list-group " >
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2">Collapsible panel</a>
                    </h4>
                </div>
                <!-- List group -->
                <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group " >
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

</template>


<script>

import axios from 'axios'


export default {
    name: "General",
    data () {
        return {
            categories: []
        }
    },
    methods: {
        testApi: function(id) {
            const api_url = '/category' // используем JSON заглушку

            // делаем GET запрос
            axios.get(api_url)
                    .then((response) => {
                        this.categories = response.data;
                    })
                    .catch((error) => {
                        console.log(error); // выводим ошибку в консоль , если что-то пошло не так
                    });
        }
    },
    mounted() {
        this.testApi() // вызываем наш метод с параметром id из URL
    }
}
</script>