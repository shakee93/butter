import VueRouter from 'vue-router';
import Backup from './components/backup.vue';
import Home from './components/home.vue';
import Settings from './components/settings.vue';

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/backup',
        component: Backup
    },
    {
        path: '/settings',
        component: Settings
    }
];

const initRoutes = function (Vue) {

    Vue.use(VueRouter);

    return new VueRouter({
        routes
    });
};

export {routes, initRoutes}