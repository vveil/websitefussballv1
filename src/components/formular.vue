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
          <input type="text" id="fname" name="fname" />
          <br />
          <br />
          <label for="lname">Nachname</label>
          <br />
          <input type="text" id="lname" name="lname" />
          <br />
          <br />
          <label for="phone">Telefon</label>
          <br />
          <input type="text" id="phone" name="phone" />
          <br />
          <br />
          <label for="address">Straße, Hausnummer</label>
          <br />
          <input type="text" id="address" name="address" />
          <br />
          <br />
          <label for="plz">PLZ, Ort</label>
          <br />
          <input type="number" id="plz" name="plz" />
          <input type="text" id="city" name="city" />
          <br />
          <br />
          <div class="addutton">
            <input type="button" id="addPerson" value="Weitere Person hinzufügen" />
          </div>
          <br />
          <div class="checkbox">
            <input type="checkbox" id="dserklärung" />
           <label for="dserklärung"> Ist ok</label>
          </div> 
          <br />
          <div class="button">
            <input type="button" id="absenden" value="Absenden" />
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
.text {
  background-color: #ffffff;
}
.formular {
  display: flex;
  justify-content: center;
}
.tformWrapper {
  text-align: left;
}
.button {
  text-align: end;
  font-size: 1em;
}
#plz {
  width: 4.5em;
  margin-right: 0.3em;
}
#city {
  width: 7.2em;
}
input {
  font-size: 1em;
}
label {
  font-size: 0.85em;
}
</style>
