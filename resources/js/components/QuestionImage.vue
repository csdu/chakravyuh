<template>
    <div>
        <img :src="imgUrl" class="mx-auto  max-w-md shadow-lg">
    </div>
  
</template>

<script>
export default {
    data() {
        return {
            // questionNo: 0
        }
    },
    props: ['imgUrl']
}
</script>

<style>

</style>