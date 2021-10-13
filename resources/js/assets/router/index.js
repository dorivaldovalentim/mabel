import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './../pages/Home.vue';
import Start from './../pages/Start.vue';
import About from './../pages/About.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/', component: Start, name: 'home' },
    { path: '/start', component: Start, name: 'start' },
    { path: '/about', component: About, name: 'about' },
];

const $router = new VueRouter ({
    mode: 'history',
    base: '/',
    routes
});

export default $router;