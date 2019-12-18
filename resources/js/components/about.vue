<template>
  <div class="h-full" id="about">
    <div class="md:w-1/2 w-4/5 mx-auto md:my-24 my-12">
      <h1 class="md:text-4xl text-xl mb-6 text-white font-bold">About Chakravyuh</h1>
      <p class="md:text-sm text-xs text-gray-200">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis, massa eget molestie accumsan, risus diam lacinia mi, ac tempus nunc tortor sed sem. Sed laoreet, massa in aliquet feugiat, dui est ultrices odio, quis scelerisque turpis purus quis quam. Vivamus urna nunc, semper eget condimentum eget, molestie nec sem. Integer in odio eros. Etiam et feugiat quam. Sed condimentum sem at justo vulputate, a convallis nibh commodo. Nullam faucibus ipsum quis tincidunt aliquam. In ac porttitor magna. Aliquam nisl quam, interdum at lacus ut, accumsan rhoncus quam. Nunc justo ligula, blandit fringilla eleifend sit amet, elementum sit amet nibh. Mauris aliquam semper eros a vehicula. Duis imperdiet odio fermentum, dignissim leo eu, placerat odio. Duis vestibulum vulputate elementum.
      </p>
    </div>
    <div class="logins md:w-1/2 w-4/5 mx-auto">
      <h3 class="md:text-lg text-sm mb-4 text-gray-100">To get updates about chakravyuh, login using google or facebook</h3>
      <a href="#" class="md:text-sm text-xs p-2 m-1 nav-logins">
        <svg width="0.5rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="inline">
          <path fill="white" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
          </path>
        </svg>
        Login</a>
      <a href="#" class="md:text-sm text-xs p-2 m-1 nav-logins">
        <svg class="inline" width="0.75rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
          <path fill="white" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
          </path>
        </svg>
        Login</a>
      <!-- <a href="#" class="md:text-base text-xs border border-black rounded p-2 m-1 text- "><font-awesome-icon :icon="['fas', 'user-secret']" />FB Login</a>
      <a href="#" class="md:text-base text-xs border border-black rounded p-2 m-1 text-black">G Login</a> -->
    </div>

  </div>

</template>

<script>
export default {
}
</script>

<style lang="css" scoped>

.nav-logins{
  color:#fff;
  position:relative;
  transition : color 0.4s linear;
}
.nav-logins:hover{
  color: #ffdc34;
}
.nav-logins::before , .nav-logins::after{
  content:'';
  position:absolute;
  z-index: -1;
  width:100%;
  height:100%;
  transition : transform 0.4s ;
  transform-timing-function : cubic-beizer(0,0.7,1,0.5);
}
.nav-logins::before {
  left:0;
  top:0;
  border: 1px solid #ffdc34;
  border-left: none;
  border-right: none;
  border-top:none;
  transform-origin:bottom;
  transform : scaleX(0);
}
.nav-logins::after {
  right:0;
  top:0;
  transform-origin:top;
  background-color: #000;
  transform : scaleY(0);
}

.nav-logins:hover::before{
  transform: scaleX(1);
}
.nav-logins:hover::after{
  transform: scaleY(1);
}


</style>
