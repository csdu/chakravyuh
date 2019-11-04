<template>
  <div class="countdown flex justify-center m-2 md:m-4">
    <div class="mx-2 md:mx-3 flex-col">
      <p class="text-white text-2xl md:text-4xl text-center">{{ days }}</p>
      <p class="text-orange-600 text-sm md:text-2xl text-center">Days</p>
    </div>
    <div class="mx-2 md:mx-3 flex-col">
      <p class="text-white text-2xl md:text-4xl text-center">{{ hours }}</p>
      <p class="text-orange-600 text-sm md:text-2xl text-center">Hours</p>
    </div>
    <div class="mx-2 md:mx-3 flex-col">
      <p class="text-white text-2xl md:text-4xl text-center">{{ minutes }}</p>
      <p class="text-orange-600 text-sm md:text-2xl text-center">Minutes</p>
    </div>
    <div class="mx-2 md:mx-3 flex-col">
      <p class="text-white text-2xl md:text-4xl text-center">{{ seconds }}</p>
      <p class="text-orange-600 text-sm md:text-2xl text-center">Seconds</p>
    </div>
    
  </div> 
</template>

<script>
export default {
    mounted() {
    window.setInterval(() => {
        this.now = Math.trunc((new Date()).getTime() / 1000);
    },1000);
  },
  props: {
    date: {
      type: String
    }
  },
  data() {
    return {
      now: Math.trunc((new Date()).getTime() / 1000)
    }
  },
  computed: {
    dateInMilliseconds() {
      return Math.trunc(Date.parse(this.date) / 1000)
    },
    seconds() {
      return (this.dateInMilliseconds - this.now) % 60;
    },
    minutes() {
      return Math.trunc((this.dateInMilliseconds - this.now) / 60) % 60;
    },
    hours() {
      return Math.trunc((this.dateInMilliseconds - this.now) / 60 / 60) % 24;
    },
    days() {
      return Math.trunc((this.dateInMilliseconds - this.now) / 60 / 60 / 24);
    }
  }
    
}
</script>
