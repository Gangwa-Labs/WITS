<html>
<head>
    <title>WITS Location</title>
</head>
<style>
    #outercontainer {
        width: 100%;
        background-size: 100%;
        background-repeat: no-repeat;
        background-color: #202020;
        height: 100%;
    }

    #logoimage {
        position: absolute;
        width: 250px;
        float: left;
    }

    .tooltitle {
        margin: auto;
        font-size: 100px;
        font-family: "Stretch Pro";
        color: white;
        text-align: center;
        padding-top: 10%;
    }

    .submitButton {
        border: none;
        width: 175px;
        height: 50px;
        background-color: #FFCC00;
        border-radius: 25px;
        font-family: Lora;
        font-size: 20pt;
        font-weight: bold;
        padding: 0;
    }

    .submitButton:hover {
        background-color: white;
    }

    .optionbox {
        background-color: #FFCC00;
        color: #202020;
        background-size: 100%;
        font-family: "Stretch Pro";
        height: 150px;
        font-size: 100px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
    }

    .buttonbox {
        background-color: white;
        width: 300px;
        height: 150px;
        float: right;
        flex: 0 0 20%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-direction: column;
    }

    #flexButtonFix {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .optionTitle {
        padding-left: 20px;
        flex: 0 0 80%;
    }

    .optionButton {
        border: none;
        width: 175px;
        height: 50px;
        background-color: #FFCC00;
        font-family: Lora;
        font-size: 20pt;
        font-weight: bold;
        padding: 0;
    }

    .optionButton:hover {
        background-color: black;
        color: #FFCC00;
    }


</style>
<?php

$host = "webdev.iyaclasses.com";
$userid = "ebird_JimJobBob";
$userpw = "Treesap3#";
$db = "ebird_WITS1";

$mysql = new mysqli(
    $host,
    $userid,
    $userpw,
    $db
);

if ($mysql->errno) {
    echo "DB Connection Error <br>";
    echo $mysql->connect_error;
    exit();
}
$sql = "SELECT * FROM location";
$results = $mysql->query($sql);

if (!$results) {
    echo "DB Query Problem <hr>";
    echo $mysql->error;
    exit();
}
?>
<body style="margin: 0; background-color: #202020;">
<div id="outercontainer">
    <?php
    include('admin_header.php');
    ?>
    <div class="tooltitle">LOCATION</div>
    <form>
        <div id="flexButtonFix">
            <button class="submitButton" type="submit" formaction="admin_single_add.php" name="database" value="location">add location</button>
        </div>
    </form>
    <form>
        <input type="hidden" name="database" value="location">
        <?php
        while ($currentrow = $results->fetch_assoc()) {
            echo "<div class='optionbox'>
            <div class='optionTitle'>" . $currentrow["location"] . "</div>
            <div class='buttonbox'>
                <div>
                    <button class='optionButton' type='submit' formaction = 'admin_single_edit.php' name='editID' value='" . $currentrow["locationID"] . "'>edit</button>
                </div>
                <div>
                    <button class='optionButton' type='submit' formaction = 'admin_delete.php' name='editID' value='" . $currentrow["locationID"] . "'>delete</button>
                </div>
            </div>
        </div><br>";
        }
        ?>

    </form>
</div>

</div>
</body>
</html>
