<template >
<div class="relative">

  <a class="toggler" href="#" @click.prevent="show=!show">
    <slot v-if="!show" name="active"></slot>
    <slot v-if="show" name="unactive"></slot>
  </a>
  <transition name="slide">
    <div v-if="show" class="z-10 absolute top-10 right-0 bg-black-op2 rounded-sm my-1" >
      <slot name="content"></slot>
    </div>
  </transition>


</div>

</template>

<script>
export default {
  data : function(){
    return{
      show : false,
    }
  }
}
</script>

<style lang="css" scoped>

.blur-enter-active{
  transition-duration: 0.3s;
  transition-timing-function: ease-in;
}
.blur-enter-to , .blur-leave{
  opacity: 1;
  transformX:0;
}
.blur-enter, .blur-leave-to{
  opacity:0;
  transformX: 10px;
}

.slide-enter-active {
 -moz-transition-duration: 0.3s;
 -webkit-transition-duration: 0.3s;
 -o-transition-duration: 0.3s;
 transition-duration: 0.3s;
 -moz-transition-timing-function:ease-in-out;
 -webkit-transition-timing-function: ease-in-out;
 -o-transition-timing-function: ease-in-out;
 transition-timing-function: ease-in-out;
}

.slide-leave-active {
 -moz-transition-duration: 0.3s;
 -webkit-transition-duration: 0.3s;
 -o-transition-duration: 0.3s;
 transition-duration: 0.3s;
 -moz-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
 -webkit-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
 -o-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
 transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
}

.slide-enter-to, .slide-leave {
 max-height: 200px;
 overflow: hidden;
}

.slide-enter, .slide-leave-to {
 overflow: hidden;
 max-height: 0;
}
</style>
