import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './../pages/Home.vue';
import Start from './../pages/Start.vue';
import About from './../pages/About.vue';
import Portfolio from './../pages/Portfolio.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/', component: Start, name: 'start' },
    { path: '/start', redirect: { name: 'start' } },
    { path: '/home', component: Home, name: 'home' },
    { path: '/about', component: About, name: 'about' },
    { path: '/portfolio', component: Portfolio, name: 'portfolio' },
];

const $router = new VueRouter ({
    mode: 'history',
    base: '/',
    routes
});

export default $router;