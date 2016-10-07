<template>
    <div class="app-wrapper" >

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500, 900" rel="stylesheet">

        <div v-show="isLoaded">
            <navigation></navigation>
            <router-view></router-view>
        </div>

    </div>
</template>

<script>

    import Navigation from './navigation.vue';

    export default {
        mounted(){
            this.isLoaded = true;
        },
        data(){
            return {
                isLoaded : false
            }
        },
        components : { Navigation }
    }
</script>