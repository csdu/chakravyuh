<template >

  <div class="nav">

    <div class="navigation w-full flex flex-row md:justify-between justify-center p-1 lg:px-10 md:px-5 lg:text-base sm:text-sm text-xs">

      <div class="flex md:w-auto w-full justify-around lg:mt-3"  >
        <a href="#" class="nav-button self-center p-2 px-4 m-1" :class="{active:isHomeActive}" @click="active='home'">Home</a>
        <a href="#" class="nav-button self-center p-2 px-4 m-1" :class="{active:isAboutActive}" @click="active='about'">About</a>
        <a href="#" class="nav-button self-center p-2 px-4 m-1" :class="{active:isRulesActive}" @click="active='rules'">Rules</a>
        <a href="#" class="nav-button self-center p-2 px-4 m-1" :class="{active:isLeaderbordActive}" @click="active='leaderboard'">Leaderboard</a>
      </div>

      <div class="md:flex hidden lg:mt-3">
        <a href="#" class="nav-logins self-center p-2 px-4 m-1">
          <svg class="inline" height="1.2rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
          <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
          	c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
          	C103.821,274.792,107.225,292.797,113.47,309.408z"/>
          <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
          	c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
          	c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
          <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
          	c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
          	c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
          <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
          	c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
          	C318.115,0,375.068,22.126,419.404,58.936z"/>
          </svg> Login
        </a>
        <a href="#" class="nav-logins self-center p-2 px-4 m-1">
          <svg class="inline" height="1.2rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
          		<path fill="blue" d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z"/>
          </svg> Login
        </a>
      </div>
    </div>

    <!--center login buttons - for small screens-->
    <div class="md:hidden flex justify-center inline-block nav-login-sm text-sm">
      <a href="#" class="self-center p-2 m-1 border border-yellow-500 rounded">
        <svg class="inline" height="1rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
        <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
          c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
          C103.821,274.792,107.225,292.797,113.47,309.408z"/>
        <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
          c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
          c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
        <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
          c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
          c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
        <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
          c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
          C318.115,0,375.068,22.126,419.404,58.936z"/>
        </svg> Login
      </a>
      <a href="#" class="self-center p-2 m-1 border border-yellow-500 rounded">
        <svg class="inline" height="1rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
            <path fill="blue" d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z"/>
        </svg> Login
      </a>
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
  },
}
</script>

<style lang="css" scoped>
.active{
  border-bottom : 1px solid #ffdc34;
  color: #ffdc34  ;
}
.navigation{
    position:fixed;
    top:0%;
    left:50%;
    transform:  translateX(-50%);
    z-index:10;
}
.nav-button{
  position: relative;
  transition : color 0.4s linear;
}
.nav-button:hover{
  color: #ffdc34;
}
.nav-button::before{
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
  transform-origin:left;
  transform : scaleX(0);
}
.nav-logins{
  color:#fff;
  position:relative;
}
.nav-logins::before{
  content:'';
  position:absolute;
  z-index: -1;
  left:0;
  top:0;
  width:100%;
  height:100%;
  border: 1px solid #ffdc34;
  transition : transform 0.4s ;
  transform-origin:bottom;
  transform-timing-function : cubic-beizer(0,0.7,1,0.5);
  transform : scaleX(0);
}
.nav-logins:hover::before, .nav-button:hover::before{
  transform: scaleX(1);
}
.nav-login-sm{
  position:absolute;
  top:20%;
  left:50%;
  transform: translateX(-50%);
}

</style>
