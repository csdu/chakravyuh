require('./bootstrap');

window.Vue = require('vue');

Vue.component('timer', require('./components/countdownTimer.vue').default);
Vue.component('Hint', require('./components/HintField.vue').default);

const app = new Vue({
    el: '#app',
});
