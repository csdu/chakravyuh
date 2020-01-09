<template >
<div class="relative">

  <a class="toggler" href="#" @click.prevent="show=!show">
    <slot v-if="!show" name="active"></slot>
    <slot v-if="show" name="unactive"></slot>
  </a>

  <div v-if="show" class="toggle-content z-10 absolute top-10 right-0 bg-black-op2 rounded-sm my-1">
    <ul class="p-2">
      <li class="p-1" v-for="link in links">
        <a :href="link[1]">{{ link[0] }}</a>
      </li>
    </ul>
  </div>

</div>

</template>

<script>
export default {
  props : {
    links: {
      type : Array,
      required : true,
    }
  },
  data : function(){
    return{
      show : false,
    }
  }
}
</script>

<style lang="css" scoped>
</style>
