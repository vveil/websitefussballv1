<template>
  <div>
    <div class="text">
      ich bin die home component
    </div>
  </div>
</template>

<script>
export default {
  name: 'home',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.text {
  background-color: #123123;
}
</style>
