<template>
  <div>
    <div class="event">
      <h2 class="eventHeading">Event-Name</h2>
      <br />
    </div>
    <div class="formular">
      <form class="tForm">
        <div class="tformWrapper">
          <label for="fname">Vorname</label>
          <br />
          <input class="Eingabe" type="text" id="fname" name="fname" />
          <br />
          <br />
          <label for="lname">Nachname</label>
          <br />
          <input class="Eingabe" type="text" id="lname" name="lname" />
          <br />
          <br />
          <label for="phone">Telefon</label>
          <br />
          <input class="Eingabe" type="text" id="phone" name="phone" />
          <br />
          <br />
          <label for="address">Straße, Hausnummer</label>
          <br />
          <input class="Eingabe" type="text" id="address" name="address" />
          <br />
          <br />
          <div class="Eingabe">
            <label for="plz">PLZ, Ort</label>
            <br />
            <input type="number" id="plz" name="plz" />
            <input type="text" id="city" name="city" />
          </div>  
          <br />
          <br />
          <div class="button">
            <input type="button" id="addPerson" value="Weitere Person hinzufügen" />
          </div>
          <br />
          <div class="checkbox">
            <input type="checkbox" id="dserklärung" />
            <label for="dserklärung">Ist ok</label>
          </div>
          <br />
          <div class="absendenButton">
            <input type="button" id="absenden" v-on:click="absenden" value="Absenden" />
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "formular",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/* Das Kontaktformular */
form {
  background-color: #ffffff;
  /* width: 15em; Breite des Formulars */
  /* padding: 20px; */
  border: 1px solid #8c8c8c;
}
label {
  /* Beschriftung auf eigener Zeile */
  display: block;
  cursor: pointer; /* Mauszeiger wird zur Hand */
  font-size: 0.85em;
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
/* input:focus,
textarea:focus {
  background-color: #d9d9d9;
} */
.text {
  background-color: #ffffff;
}
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
}
#plz {
  width: 5.7em;
  margin-right: 0.3em;
}
#city {
  width: 8em;
}
input {
  font-size: 1em;
  width: 100%;
}
</style>
