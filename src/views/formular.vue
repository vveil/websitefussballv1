<template>
  <div class="webpage">
    <div class="event">
      <h2 class="eventHeading">Event-Name</h2>
      <br />
    </div>
    <div class="formular">
      <form class="tForm" @submit="addPerson">
        <div class="tformWrapper">
          <eventSelector />
          <label for="fname">Vorname</label>
          <br />
          <input class="Eingabe" type="text" id="fname" v-model="fname" name="fname" />
          <br />
          <br />
          <label for="lname">Nachname</label>
          <br />
          <input class="Eingabe" type="text" id="lname" v-model="lname" name="lname" />
          <br />
          <br />
          <label for="phone">Telefon</label>
          <br />
          <input class="Eingabe" type="text" id="phone" v-model="phone" name="phone" />
          <br />
          <br />
          <label for="address">Straße, Hausnummer</label>
          <br />
          <input class="Eingabe" type="text" id="address" v-model="address" name="address" />
          <br />
          <br />
          <div id="Eingabe2">
            <label for="plz">PLZ, Ort</label>
            <br />
            <input type="number" id="left" v-model="plz" name="plz" />
            <input type="text" id="right" v-model="city" name="city" />
          </div>  
          <br />
          <br />
          <div class="button">
            <input style=color:teal type="button" id="addPerson" value="Weitere Person hinzufügen" />
          </div>
          <br />
          <div class="checkbox">
            <input type="checkbox" id="dserklärung" />
            <label for="dserklärung">Ist ok</label>
          </div>
          <br />
          <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
          <p><input type="submit" value="Absenden" class="w3-button w3-block w3-teal" style="width:100%" /></p>
        </div>
      </form>
    </div>
  </div>
</template>

<script>

import axios from 'axios'
import eventSelector from '../components/eventSelector.vue'

export default {
  name: "Formular",
  components: {
    eventSelector
    },
  data () {
    return {
      fname: '',
      lname: '',
      phone: null,
      address: '',
      plz: null,
      city: ''
    }
  },
  methods: {
    addPerson (e){
      e.preventDefault()
      const newPerson = {
        fname: this.fname,
        lname: this.lname,
        phone: this.phone,
        address: this.address,
        plz: this.plz,
        city: this.city
      }

      axios.post('ajaxfile.php', {
        request: 2,
        lname: newPerson.lname,
        fname: newPerson.fname,
        phone: newPerson.phone,
        plz: newPerson.plz,
        city: newPerson.city,
        address: newPerson.address,
        eID: 2
      })
      .then(res => alert(res.data))
      .catch(err => console.debug(err));

      // this.$emit('add-person', newPerson)
    }
  }

};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
input[type="checkbox"] {
  display:none;
}
input[type="checkbox"] + label::before {
  width: 15px;
  height: 15px;
  border-radius: 15px;
  border: 2px solid teal;
  background-color: #fff;
  display: block;
  content: "";
  float: left;
  margin-right: 5px;
}
input[type="checkbox"]:checked+label::before {
  box-shadow: inset 0px 0px 0px 3px #fff;
  background-color: teal;
}
label {
  display: block;
  cursor: pointer;
  font-size: 0.85em;
}
.webpage, .event, .tformWrapper {
  background-color: azure;
  color: teal;
}
/* input#absenden,
textarea {
  width: 15em;
  border: 0.05em solid #8c8c8c;
  margin-bottom: 1em;
} */
/* textarea {
  height: 7em;
} */
.formular {
  display: flex;
  justify-content: center;
}
.tformWrapper {
  /* width: 15em; */
  text-align: left;
}
.button {
  text-align: center;
  font-size: 1em;
  width: 100%m;
  margin-bottom: 1em;
  border: solid 1px;
  border-radius: 0px;
  color:teal;
  /* background-color: teal; */
  display: flex;
}
.Eingabe2 {
  width: 100%
}
  
#left {
  width: 5.7em;
  margin-right: 0.3em;
  display: inline-block;
  min-width: 30%;
}
#right {
  width: 8em;
  display: block;
  text-align: left;
}
input {
  font-size: 1em;
  width: 100%;
  border:1px solid #d9d9d9;
	border-radius:4px;
    -webkit-border-radius:4px;
	padding:8px 13px;
}
.Eingabe {
  width: 15em;
}
</style>
