<template>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">{{ item.name }}</div>
            <!-- List group -->
            <ul class="list-group">

                <li class="list-group-item" >Подкатегории</li>

            </ul>
        </div>

</template>


<script>

    export default {
        name: "Category",
        data () {
            return {
            }
        },
        props: ['item'],
        methods: {
        },
        mounted() {

        }
    }
</script>