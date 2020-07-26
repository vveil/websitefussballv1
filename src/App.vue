<template>
  <div id="app">
    <home msg="Ja moin"/>
  </div>
</template>

<script>
import home from './components/home.vue'
import formular from './components/formular.vue'

export default {
  name: 'App',
  components: {
    home,
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
