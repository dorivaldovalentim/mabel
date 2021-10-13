import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
    { path: '/', component: require('./../pages/Start.vue').default, name: 'start' },
    { path: '/start', redirect: { name: 'start' } },
    { path: '/home', component: require('./../pages/Home.vue').default, name: 'home' },
    { path: '/about', component: require('./../pages/About.vue').default, name: 'about' },
    { path: '/portfolio', component: require('./../pages/Portfolio').default, name: 'portfolio' },
    { path: '/portfolio/show/:id', component: require('./../pages/Portfolio/Show.vue').default, name: 'portfolio.show' },
];

const $router = new VueRouter({
    mode: 'history',
    base: '/',
    routes
});

export default $router;