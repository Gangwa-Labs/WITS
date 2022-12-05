<?php

session_start();

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

?>

<html>
<head>
    <title>WITS Frontpage</title>
    <style>
        #outercontainer {
            width: 100%;
            background-image: url("makerspace1.png");
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: black;
        }

        #middletext {
            font-family: "Stretch Pro";
            font-size: 80px;
            color: #FFFFFF;
            text-align: center;
            margin: auto;
            padding-top: 20%;
        }

        #searchbar {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 340px;
            flex-direction: row;
            gap: 15px;
            border: none;
        }

        #featuredtools {
            font-family: "Stretch Pro";
            font-size: 30px;
            color: #FFCC00;
            align-content: center;
            text-align: center;
            background-color: black;
            height: 100%;
        }

        .toolimage {
            font-family: "Lora";
            width: 29%;
            margin: 2%;
            text-align: center;
            align-content: center;
            color: #FFFFFF;
            float: left;

        }

        .toolimageimage {
            width: 400px;
            height: 500px;
            border-radius: 21px;
            border: #5B5B5B 20px solid;
        }

        #footer {
            background-color: #5B5B5B;
            text-align: center;
            font-family: "Stretch Pro";
            font-size: 12pt;
            height: 45px;
            color: white;
        }

        #searchButton {
            background-color: #FFCC00;
            width: 120px;
            height: 50px;
            border-radius: 25px;
            border: none;
            background-image: url("search.svg");
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
        }
        #searchButton:hover{
            background-color: white;
        }
    </style>
</head>

<body style="margin: 0px;">
<?php
include('header.php');
include ('login_Auth.php');
?>
<div id="outercontainer">
    <div id="middletext">
        WHHAT IS IN THEE SSHOP?
    </div>
    <form action="Results.php" style="list-style-type:none; margin: 0">
        <div id="searchbar">
            <div><input style="width: 680px;height: 50px;font-size: 25px; border-radius: 25px;opacity: 80%; border: none;"
                        type="text" name="search">
            </div>
            <div>
                <button id="searchButton" type="submit"></button>
            </div>
        </div>
    </form>
</div>

<div id="featuredtools"> POPPULAR T00LLS<br>
    <div class="toolimage">
        <img class="toolimageimage" src="orbital.jpeg"><br>
        <h2>Orbital Sander</h2><br>
        This text will mainly be used to emphasize the fact that I have nothing to say. What more can really be said
        about this situation? I really do not have an answer.
    </div>
    <div class="toolimage">
        <img class="toolimageimage" src="jigsaw.jpeg"><br>
        <h2>Disc Sander</h2><br>
        This text will mainly be used to emphasize the fact that I have nothing to say. What more can really be said
        about this situation? I really do not have an answer.
    </div>
    <div class="toolimage">
        <img class="toolimageimage" src="drill.jpg"><br>
        <h2>Belt Sander</h2><br>
        This text will mainly be used to emphasize the fact that I have nothing to say. What more can really be said
        about this situation? I really do not have an answer.
    </div>
</div>
<div id="footer">
    <br>
    this site is powered by the graciousness of cohort 8
</div>
</body>


</html>
