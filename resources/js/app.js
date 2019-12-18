require('./bootstrap');

window.Vue = require('vue');

// import { library } from '@fortawesome/fontawesome-svg-core'
// import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.component('timer',require('./components/countdownTimer.vue').default);
Vue.component('top-navigation-bar',require('./components/topNavigationBar.vue').default);
Vue.component('tiles-background',require('./components/tilesBackground.vue').default);
Vue.component('maze',require('./components/maze.vue').default);
Vue.component('about',require('./components/about.vue').default);

// library.add(faUserSecret)
// Vue.component('font-awesome-icon', FontAwesomeIcon)

const app = new Vue({
    el: '#app',
});
