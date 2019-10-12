<template>
  <div>
    <!-- <h1 class="mx-auto text-center font-mono font-bold text-3xl ">QUESTION PANEL</h1> -->
    <div class="bg-white max-w-md rounded-lg mx-auto panel">

      <form action="">
      <question-title question-no=1></question-title>
      <question-image img-url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwzjut_ZHze45kLkPphi92WtTtsrwezL6bSjB5e6Dkc0RvjIRAFw"></question-image>
      <answer-input></answer-input>
      <submit-button ></submit-button>
      
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
      text: "This is a question"
    };
  },
  components: {
     QuestionTitle,
     QuestionImage
  },
  props: [
    'userId'
  ]
};
</script>

<style>
.panel {
  height: 32rem;
}

</style>