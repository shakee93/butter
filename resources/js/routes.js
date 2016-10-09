import VueRouter from 'vue-router';

// This is used to load components async
const Backup = resolve => require(['./components/backup.vue'], resolve);
const Home = resolve => require(['./components/home.vue'], resolve);
const Settings = resolve => require(['./components/settings.vue'], resolve);

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