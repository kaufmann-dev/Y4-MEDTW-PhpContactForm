<link rel="stylesheet" href="style.css">
<?php
    if(!isset($_GET["form_rdr"]) || !filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
        if(
            isset($_GET["form_rdr"]) &&
            (
                !filter_var($_GET["email"], FILTER_VALIDATE_EMAIL) ||
                !preg_match("/^[a-zA-Z\s]+$/",$_GET["firstname"]) ||
                !preg_match("/^[a-zA-Z\s]+$/",$_GET["lastname"]) ||
                ($_GET("gender") != "female" && $_GET("gender") != "male" && $_GET("gender") != "diverse")
            )
        ) {
            ?>
                <h4>ERROR: Wrong input data</h4>
            <?php
        }
        ?>
            <form action="">
                <input type="hidden" name="form_rdr">

                <label for="gender">Geschlecht</label><br>
                <input required type="radio" id="css" name="gender" value="female">
                <label for="female">Weiblich</label><br>
                <input required type="radio" id="male" name="gender" value="male">
                <label for="male">Männlich</label><br>
                <input required type="radio" id="html" name="gender" value="diverse" class="fiften">
                <label for="diverse">Divers</label>
                <br>

                <label for="title">Titel</label><br>
                <input type="text" name="title" id="title">
                <br>

                <label for="firstname">Vorname</label><br>
                <input required type="text" name="firstname" id="firstname">
                <br>

                <label for="lastname">Nachnahme</label><br>
                <input required type="text" name="lastname" id="lastname">
                <br>

                <label for="email">E-Mail</label><br>
                <input required type="text" name="email" id="email">
                <br>

                <label for="streetwnumber">Straße + Hausnummer</label><br>
                <input type="text" name="streetwnumber" id="streetwnumber">
                <br>

                <label for="city">PLZ + Stadt</label><br>
                <input type="text" name="city" id="city">
                <br>

                <label for="state">Bundesland</label><br>
                <select id="state" name="state">
                    <option value="noe">Niederösterreich</option>
                    <option value="w">Wien</option>
                    <option value="ooe">Oberösterreich</option>
                    <option value="ktn">Kärnten</option>
                    <option value="bgld">Burgenland</option>
                    <option value="sbg">Salzburg</option>
                    <option value="vbg">Vorarlberg</option>
                    <option value="t">Tirol</option>
                    <option value="stmk">Steiermark</option>
                </select>
                <br>

                <label for="interessengebiete">Interessengebiete</label><br>
                <input type="checkbox" id="sew" name="sew">
                <label for="sew">SEW</label><br>
                <input type="checkbox" id="medt" name="medt">
                <label for="medt">MEDT</label><br>
                <input type="checkbox" id="syt" name="syt" class="fiften">
                <label for="syt">SYT</label>
                <br>

                <input type="submit" value="Submit">
            </form>
        <?php
    } else {
        ?>
            <h1>Vielen Dank für ihr Feedback!</h1>
        <?php
    }
?>