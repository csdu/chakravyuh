<template>
  <div>
    <!-- <h1 class="mx-auto text-center font-mono font-bold text-3xl ">QUESTION PANEL</h1> -->
    <div class="bg-white max-w-md rounded-lg mx-auto panel">

        <form>
            <question-title :question-no="currentQuestionIndex + 1"></question-title>
            <question-image :img-url="questions[currentQuestionIndex].src"></question-image>
            <div class="mx-auto flex justify-center ">
                <input type="text" v-model="answer" class="bg-gray-900 font-mono  text-xl rounded-sm m-6 text-center p-1 max-w-4xl">
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 rounded px-4 py-1 shadow-md hover:bg-blue-600" @click.prevent="evaluate">Submit</button>
            </div>
        </form>
    </div>


  </div>
</template>

<script>

import QuestionTitle from './QuestionTitle';
import QuestionImage from './QuestionImage';
import AnswerInput from './AnswerInput';
import SubmitButton from './SubmitButton';

export default {
    data() {
        return {
            answer: '',
            questions: [
                {id: 1, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 2, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 3, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 4, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 5, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 6, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 7, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 8, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
                {id: 9, type: 'image', src: 'http://lorempixel.com/200/200', answer:'correct answer'},
            ],
            currentQuestionIndex: 0,
        };
    },
    components: {
        QuestionTitle,
        QuestionImage
    },
    props: [
        'userId',
        'question_url'
        'evaluate_url'
    ],
    methods: {
        getQuestion() {
                axios.get(this.question_url).then((response) => this.question = response.data.question);
        }
        evaluate()
        {
            axios.post(this.evaluate_url, {answer: this.answer}).then(response => {
                if(response.data.sucess) {
                    this.question_url = response.data.next_question
                }
            });
        }
    }
};
</script>

<style>
.panel {
  height: 32rem;
}

</style>
