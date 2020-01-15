require('./bootstrap');

window.Vue = require('vue');

Vue.component('timer', require('./components/countdownTimer.vue').default);
Vue.component('dropdown', require('./components/dropdown.vue').default);
Vue.component('Hint', require('./components/HintField.vue').default);
Vue.component('users', require('./components/Users.vue').default);
Vue.component('admin-dashboard', require('./components/AdminDashboard.vue').default);

const app = new Vue({
    el: '#app',
});
