require('./bootstrap');

window.Vue = require('vue');


Vue.component('timer',require('./components/countdownTimer.vue').default);
Vue.component('top-navigation-bar',require('./components/topNavigationBar.vue').default);


const app = new Vue({
    el: '#app',
});
