<template >

  <div class="nav">

    <div class="navigation w-full flex md:justify-between justify-around p-1 md:px-10  ">
      <div class="flex justify-start">
        <a href="#" class="md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1 " :class="{active:isHomeActive}" @click="active='home'">Home</a>
        <a href="#about" class="md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1" :class="{active:isAboutActive}" @click="active='about'">About</a>
        <a href="#" class="md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1" :class="{active:isRulesActive}" @click="active='rules'">Rules</a>
        <a href="#" class="md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1" :class="{active:isLeaderbordActive}" @click="active='leaderboard'">Leaderboard</a>
      </div>
      <div class="flex md:inline-block hidden mt-6">
        <a href="#" class="md:text-sm text-xs self-center p-2 px-3 m-1 border border-yellow-500 rounded">Login</a>
        <a href="#" class="md:text-sm text-xs self-center p-2 px-3 m-1 rounded border border-yellow-500 bg-yellow-500 text-black">Register</a>
      </div>
    </div>

    <div class="md:hidden inline-block flex justify-center nav-login-sm">
      <a href="#" class="text-2xs self-center p-2 px-3 m-1 border border-yellow-500 rounded text-black">Login</a>
      <a href="#" class="text-2xs self-center p-2 px-3 m-1 rounded border border-yellow-500 bg-yellow-500 text-black">Register</a>
    </div>
  </div>

</template>

<script>
export default {
  data :function(){
    return{
      active : "home",
    }
  } ,
  computed : {
    isHomeActive : function(){
      return this.active =='home';
    },
    isAboutActive : function(){
      return this.active =='about';
    },
    isRulesActive : function(){
      return this.active =='rules';
    },
    isLeaderbordActive : function(){
      return this.active =='leaderboard';
    },

  }
}
</script>

<style lang="css" scoped>
  .navigation{
    position:fixed;
    top:0%;
    left:50%;
    transform:  translateX(-50%);
    z-index:10;

}
  .nav-login-sm{
    position:absolute;
    top:65%;
    left:50%;
    transform: translateX(-50%);
  }
  .active{
    border-bottom : 2px solid #ffdc34;
  }

@responsive{
  .hober{
    @apply border border-b border-yellow-500;
  }
}
</style>
