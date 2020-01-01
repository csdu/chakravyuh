require('./bootstrap');

window.Vue = require('vue');

Vue.component('timer',require('./components/countdownTimer.vue').default);
Vue.component('leaderboard',require('./components/Leaderboard.vue').default);

const app = new Vue({
    el: '#app',
});
