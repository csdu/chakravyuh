require('./bootstrap');

window.Vue = require('vue');

Vue.component('question-panel', require('./components/QuestionPanel.vue').default);
Vue.component('question-title', require('./components/QuestionTitle.vue').default);
Vue.component('question-image', require('./components/QuestionImage.vue').default);
Vue.component('answer-input', require('./components/AnswerInput.vue').default);
Vue.component('submit-button', require('./components/SubmitButton.vue').default);


const app = new Vue({
    el: '#app',
});

console.log("from app.js");