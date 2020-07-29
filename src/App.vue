<template>
  <div id="app">
    <formularNeu />
  </div>
</template>

<script>
import formularNeu from './components/formularNeu.vue'

export default {
  name: 'App',
  components: {
    formularNeu
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
