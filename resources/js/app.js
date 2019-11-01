require('./bootstrap');

window.Vue = require('vue');

Vue.component('countdown', require('./components/Countdown.vue').default);

const app = new Vue({
    el: '#app',
});
