import VueRouter from 'vue-router';
import Backup from './components/backup.vue';
import Home from './components/home.vue';

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/backup',
        component: Backup
    }
];

const initRoutes = function (Vue) {

    Vue.use(VueRouter);

    return new VueRouter({
        routes
    });
};

export {routes, initRoutes}