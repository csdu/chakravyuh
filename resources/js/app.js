require('./bootstrap');

window.Vue = require('vue');

Vue.component('timer', require('./components/countdownTimer.vue').default);
Vue.component('hint-field', require('./components/HintField.vue').default);
Vue.component('users', require('./components/Users.vue').default);
Vue.component('admin-dashboard', require('./components/AdminDashboard.vue').default);
Vue.component('Hints', require('./components/Hints.vue').default);
Vue.component('dropdown', require('./components/dropdown.vue').default);

Vue.component('leader-board', require('./components/Leaderboard.vue').default);
Vue.component('winner-circle', require('./components/WinnerCircle.vue').default);

import FlashMessages from "./components/Flash.vue";
Vue.component("v-flash", FlashMessages);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.Events = new Vue({});

window.flash = (message, level = 'success', important = false) => {
    window.Events.$emit('flash', {
        id: Math.floor(Date.now()).toString(),
        message, level, important
    });
};

Vue.mixin({
    methods: {
        flash: flash,
        reload: () => window.location.reload(),
        redirectHandler: ({ request }) => window.location.replace(request.responseURL),
    }
});

const app = new Vue({
    el: '#app',
});
