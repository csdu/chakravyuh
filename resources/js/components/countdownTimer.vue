<template>


      <div class="timer p-2 absolute md:w-1/5 w-1/2">
        <div class="days-container absolute-center w-1/3 ">
          <svg class="p-2"viewBox="0 0 247 283" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.95741 71.3274L123.5 1.1547L245.043 71.3274V211.673L123.5 281.845L1.95741 211.673V71.3274Z" stroke="#eeee55" stroke-width="5"/>
            <circle r="10" fill="black">
              <animateMotion dur="3s" repeatCount="indefinite" path="M1.95741 71.3274L123.5 1.1547L245.043 71.3274V211.673L123.5 281.845L1.95741 211.673V71.3274Z" />
            </circle>
            <text x="50%" y="45%" text-anchor="middle" dominant-baseline="middle" font-size="5rem" fill="#000">{{days}}</text>
            <text x="50%" y="65%" text-anchor="middle" dominant-baseline="middle" font-size="2.5rem" fill="#000">DAYS</text>
          </svg>
        </div>
        <div class="hours-container w-1/4">
          <svg viewBox="0 0 247 283" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.95741 71.3274L123.5 1.1547L245.043 71.3274V211.673L123.5 281.845L1.95741 211.673V71.3274Z" stroke="#494ca2" stroke-width="5"/>
            <text x="50%" y="45%" text-anchor="middle" dominant-baseline="middle" font-size="5rem" fill="#000">{{hours}}</text>
            <text x="50%" y="65%" text-anchor="middle" dominant-baseline="middle" font-size="2.5rem" fill="#000">Hours</text>
          </svg>

        </div>
        <div class="minutes-container w-1/5">
          <svg viewBox="0 0 247 283" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.95741 71.3274L123.5 1.1547L245.043 71.3274V211.673L123.5 281.845L1.95741 211.673V71.3274Z" stroke="#5eb7b7" stroke-width="4"/>
            <text x="50%" y="45%" text-anchor="middle" dominant-baseline="middle" font-size="5rem" fill="#000">{{minutes}}</text>
            <text x="50%" y="65%" text-anchor="middle" dominant-baseline="middle" font-size="2.5rem" fill="#000">Minutes</text>
          </svg>
        </div>
        <div class="seconds-container w-1/6">
          <svg viewBox="0 0 247 283" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.95741 71.3274L123.5 1.1547L245.043 71.3274V211.673L123.5 281.845L1.95741 211.673V71.3274Z" stroke="#ffd369" stroke-width="3"/>
            <circle r="8" fill="white">
              <animateMotion dur="1s" repeatCount="indefinite" path="M1.95741 71.3274L123.5 1.1547L245.043 71.3274V211.673L123.5 281.845L1.95741 211.673V71.3274Z" />
            </circle>
            <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="6rem" fill="#000">{{seconds}}</text>
          </svg>
        </div>
    </div>


</template>
<script>

export default{

  data: function(){
    return{
      eventDate : new Date('2020','01','24'),
      currentDate : new Date(),
      seconds : 0,
      minutes : 0,
      hours : 0,
      days : 0
    }
  },

  computed:{
    remTime: function(){
      return this.eventDate.getTime() - this.currentDate.getTime();
    },

  },

  methods :{
    updateTimer : function(){
      var date = new Date();
      var r = this.eventDate.getTime() - date.getTime();
      var s = r/1000;
      var m = s/60;
      var h = m/60;
      this.days = Math.floor(h/24);
      h = Math.floor(h % 24);
      m = Math.floor(m % 60);
      s = Math.floor(s % 60);
      this.hours = h<10 ? '0'+h : h;
      this.minutes = m<10?'0'+m:m;
      this.seconds = s<10?'0'+s:s;

      var self = this;
      setTimeout(function(){
        self.updateTimer();
      }, 1000);
    }
  },

  mounted: function(){
    this.updateTimer();
  },

}

</script>

<style lang="css" scoped>

      .hours-container{
        position:absolute;
        right:0;
        transform: translate(-30%,-90%);
      }
      .minutes-container{
        position:absolute;
        left:18%;
        transform: translateY(-30%);
      }
      .seconds-container{
        position:absolute;
        right:0;
        transform:translate(-50%,10%);
      }

</style>
