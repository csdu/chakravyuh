require('./bootstrap');

window.Vue = require('vue');

Vue.component('timer',require('./components/countdownTimer.vue').default);
Vue.component('top-navigation-bar',require('./components/topNavigationBar.vue').default);
Vue.component('tiles-background',require('./components/tilesBackground.vue').default);

const app = new Vue({
    el: '#app',
});
