<template>
  <div id="app">
    <div id="nav">
      <!-- <router-link to="/">Home</router-link> | -->
      <router-link to="/">Teilnehmer Formular</router-link> |
      <router-link to="/about">Über uns</router-link>
      <!-- <router-link to="/login">Vereinslogin</router-link> -->
    </div>
    <router-view/>
    <!-- <formular v-on:add-person="addPerson" /> -->
    <!-- <adminlogin /> -->
  </div>
</template>

<script>

// import formularNeu from './components/formularNeu.vue'
// import formular from './components/formular.vue'
// import adminlogin from './components/adminlogin.vue'
// import axios from 'axios'


export default {
  name: 'App',
  components: {
    // formularNeu
    // formular,
    // adminlogin
  },
  methods: {
    // addPerson(newPerson) {
    //   axios.post('ajaxfile.php', {
    //     request: 2,
    //     lname: newPerson.lname,
    //     fname: newPerson.fname,
    //     phone: newPerson.phone,
    //     plz: newPerson.plz,
    //     city: newPerson.city,
    //     address: newPerson.address,
    //     eID: 2
    //   })
    //   .then(res => alert(res.data))
    //   .catch(err => console.debug(err));
    // }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin-top: 60px;
}
</style>
