<template>
  <div>
    <div class="login">
      <form>
        <div class="formWrapper">
          <label class="lgLabel">Username:</label>
          <br />
          <input for="username" />
          <br />
          <label class="lgLabel">Passwort:</label>
          <br />
          <input type="password" />
          <br />
          <div id="buttonWrapper">
            <input id="logInButton" type="button" value="Einloggen" />
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "adminlogin",
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
.lgLabel{
    margin-top: 10px;
}
.login {
  margin: 0 auto; /* to make the div center align to the browser */
  justify-content: center;
  display: flex;
}
.formWrapper {
  text-align: left;
}
#buttonWrapper {
  margin-top: 10px;
  text-align: end;
}
</style>
