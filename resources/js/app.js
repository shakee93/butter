import Vue from 'vue';
import App from './components/app.vue';
import { bootstrap } from './bootstrap';
import {initRoutes} from './routes';

bootstrap(Vue);

const router = initRoutes(Vue);

const app = new Vue({
    el: '#butter-app',
    data: {
        message: 'Everything is mystery from here, Vue is on board'
    },
    components: {App},
    router
});