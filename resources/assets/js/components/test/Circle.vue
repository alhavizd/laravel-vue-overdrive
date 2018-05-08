<template>
  <overdrive id="element" :easing="easing" :duration="350">
    <img src="/images/icon.png" class="circle">
  </overdrive>
</template>

<script>
import * as easing from 'eases/quart-in-out'
export default {
  name: 'el-circle',
  data () {
    return {
      easing
    }
  }
}
</script>

<style scoped>
  .circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    float: left;
  }
</style>
