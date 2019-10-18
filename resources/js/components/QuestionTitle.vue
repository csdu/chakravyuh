<template>
  <div class="mx-auto p-1">
      <h2 class="text-center text-black font-mono text-blue-500 text-2xl font-bold">LEVEL: {{questionNo}}</h2>
  </div>
  
</template>

<script>
export default {
    data() {
        return {
            // questionNo: 0
        }
    },
    props: ['questionNo']
}
</script>

<style>

</style>