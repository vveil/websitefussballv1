<template>
    <div class="wrapper">
        <div class="event">
            <h1>Event-Name</h1>
        </div>

        <div class="form">
        <form>
            <div class="top-form">
                <div class="inner-form">
                    <div class="label">Vorname</div>
                    <input type="text" name="vorname">
                </div>
                <br />
                <div class="inner-form">
                    <div class="label">Nachname</div>
                    <input type="text" name="nachname">
                </div>
                <br />
                <div class="inner-form">
                    <div class="label">Telefon</div>
                    <input type="number" name="telefon">
                </div>
                <br />
                <div class="inner-form">
                    <div class="label">Straße, Hausnummer</div>
                    <input type="text" name="adresse">
                </div>
            </div>

            <div class="mid-form">
                <div class="inner-mid">
                    <div class="label">PLZ</div>
                    <input type="number" name="plz">
                </div>
                <div class="inner-mid2">
                    <div class="label">Ort</div>
                    <input type="text" name="ort">
                </div>
            </div>
            <br />
            <div class="bot-form">
                <button class="breakout-button" id="btn" type="button">Weitere Person hinzufügen</button>
                <br />
                <div class="checkbox">
                    <input type="checkbox" id="dserklärung" />
                    <label for="dserklärung">Ist ok</label>
                </div>
                <br />
                <br />
                <div class="btn2">
                    <input type="submit" id="btn2" value="Absenden" />
                </div>
            </div>
        </form>    
        </div>
    </div>
</template>

<script>
export default {
    name:"formularNeu"
}
</script>

<style scoped>

*{
    margin: 0;
    padding: 0;
    user-select: none;
}

.wrapper {
    background: #ffffff;
    width: 100%;
    max-width: 25em;
    margin: 3% auto 0;
    padding: 20px;
    box-sizing: border-box;
    /* display: flex;
    justify-content: center; */
}

.event {
    text-align: center;
    height: min-content;
    color: teal;
}

.event h1 {
    letter-spacing: 1px;
}

.form {
    width: 100%;
    margin-top: 10%;
}

/* form {
    text-align: center;
} */

.top-form,
.mid-form {
    width: 92%;
    min-height: 65px;
    margin: 10px 0;
    /* overflow: hidden; */
}

.bot-form {
    width: 100%;
}

input {
  font-size: 1em;
  width: 100%;
  border :1px solid #d9d9d9;
    border-radius: 4px;
    -webkit-border-radius: 4px;
	padding: 8px 13px;
}

#btn {
    border: 0;
    border-radius: 4px;
    -webkit-border-radius: 4px;
	padding: 0;
    color: teal;
    display: block;
    justify-content: center;
    width: 100%;
    padding: 0.6rem 2rem;
    background: transparent;
    border: 1px solid;
    transition: background 100ms ease;
    position: static;
}
    
#btn2 {
    border: 0;
    border-radius: 4px;
    -webkit-border-radius: 4px;
	padding: 0;
    background-color: teal;
    color: #ffffff;
    padding: 0.8rem 2rem;
    transition: background 100ms ease;
    position: static;
    display: block;
}
/* .form input [type="text"],
.form input [type="number"] {
    padding: 15px 5px;
    box-sizing: border-box;
    width: 100%;
    border: 2px solid #fff;
    border-radius: 2px;
    outline: none;
    transition: all 0.2s ease;
}

.form input:focus {
    border-color: teal;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.0125),
                0 0 8px rgba(76, 161, 175, 0.5);
} */

.form .label {
    margin-bottom: 5px;
}

.mid-form .inner-mid {
    width: 35%;
    float: left;
    margin-right: 10%;
}

.mid-form .inner-mid2 {
    width: 55%;
    float: right;
}

/* .mid-form .inner-form:last-child {
    margin-right: 0;
} */

.label {
    display: block;
    font-size: 0.85em;
    float: left;
    color: teal;
}

label {
    float: left;
    margin-left: 5%;
    font-size: 0.85em;
    color:#000000;
}

.btn {
    background: #ffffff;
    width: 100%;
    border: solid 1px;
    text-align: center;
    color: teal;
    display: block;
    font-size: 1em;
}

input[type="checkbox"] {
    float: left;
    width: 15px;
    height: 15px;
    text-align: left;
}

.btn2 {
    background: teal;
    width: 100%;
    text-align: center;
    color: #ffffff;
}

@media screen and (max-width: 460px) {
    .wrapper {
        margin: 25px auto 0;
    }
    .mid-form .inner-form {
        width: 100%;
        margin: 5px 0;
    }
}
</style>