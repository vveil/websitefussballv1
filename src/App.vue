<template>
  <div id="app">
    <formular msg="formular" />
  </div>
</template>

<script>
import formular from './components/formular.vue'

export default {
  name: 'App',
  components: {
    formular
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
