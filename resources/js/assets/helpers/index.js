import Vue from 'vue';

Vue.mixin({
    methods: {
        getImage (image) {
            let url = require(`./../static/images/${image}`);
            return url.substr(1);
        }
    }
});