import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './../pages/Home.vue';
import About from './../pages/About.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/', component: Home, name: 'home' },
    { path: '/about', component: About, name: 'about' },
];

const $router = new VueRouter ({
    mode: 'hash',
    routes
});

export default $router;