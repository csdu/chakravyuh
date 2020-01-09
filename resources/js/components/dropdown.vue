<template >
<div class="relative">

  <a class="toggler" href="#" @click.prevent="show=!show">
    <slot v-if="!show" name="active"></slot>
    <slot v-if="show" name="unactive"></slot>
  </a>

  <div v-if="show" class="z-10 absolute top-10 right-0 bg-black-op2 rounded-sm my-1">
    <slot name="content"></slot>
  </div>

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
</style>
