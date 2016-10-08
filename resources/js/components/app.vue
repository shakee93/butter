<template>
    <div class="app-wrapper" v-show="isLoaded">

            <navigation></navigation>
            <router-view></router-view>

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