require('./bootstrap');

window.Vue = require('vue');

Vue.component('timer',require('./components/countdownTimer.vue').default);

const app = new Vue({
    el: '#app',
});
