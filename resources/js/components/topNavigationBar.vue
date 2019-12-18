<template >

  <div class="nav">

    <div class="navigation w-full flex md:justify-between justify-around p-1 md:px-10  ">
      <div class="flex justify-start">
        <a href="#" class="nav-button md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1 " :class="{active:isHomeActive}" @click="active='home'">Home</a>
        <a href="#about" class="nav-button md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1" :class="{active:isAboutActive}" @click="active='about'">About</a>
        <a href="#" class="nav-button md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1" :class="{active:isRulesActive}" @click="active='rules'">Rules</a>
        <a href="#" class="nav-button md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1" :class="{active:isLeaderbordActive}" @click="active='leaderboard'">Leaderboard</a>
      </div>
      <div class="flex md:inline-block hidden mt-6">
        <a href="#" class="md:text-sm text-xs self-center p-2 px-3 m-1 nav-logins">
          <svg width="0.5rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="inline">
            <path fill="white" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
            </path>
          </svg>
          Login</a>
        <a href="#" class="md:text-sm text-xs self-center p-2 px-3 m-1 nav-logins">
          <svg class="inline" width="0.75rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
            <path fill="white" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
            </path>
          </svg>
          Login</a>
      </div>
    </div>

    <div class="md:hidden inline-block flex justify-center nav-login-sm">
      <a href="#" class="text-2xs self-center p-2 px-3 m-1 nav-logins">
        <svg width="0.5rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="inline">
          <path fill="white" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
          </path>
        </svg>
        Login</a>
      <a href="#" class="text-2xs self-center p-2 px-3 m-1 nav-logins">
        <svg class="inline" width="0.75rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
          <path fill="white" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
          </path>
        </svg>
        Login</a>
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
.nav-button{
  transition : color 0.4s linear;
  position: relative;
}
.nav-button:hover{
  color: #ffdc34;
}
.nav-logins{
  color:#fff;
  position:relative;
  transition : color 0.4s linear;
}
.nav-logins:hover{
  color: #ffdc34;

}
.nav-logins::before , .nav-button::before{
  content:'';
  position:absolute;
  z-index: -1;
  left:0;
  top:0;
  width:100%;
  height:100%;
  border: 1px solid #ffdc34;
  border-left: none;
  border-right: none;
  border-top:none;
  transition : transform 0.4s ;
  transform-timing-function : cubic-beizer(0,0.7,1,0.5);
  transform : scaleX(0);
}
.nav-logins::before {
  transform-origin:bottom;
}
.nav-button::before{
  transform-origin:left;

}

.nav-logins:hover::before, .nav-button:hover::before{
  transform: scaleX(1);
}

  .nav-login-sm{
    position:absolute;
    top:60%;
    left:50%;
    transform: translateX(-50%);
  }
  .active{
    border-bottom : 1px solid #ffdc34;
    color: #ffdc34  ;
  }

@responsive{
  .hober{
    @apply border border-b border-yellow-500;
  }
}
</style>
