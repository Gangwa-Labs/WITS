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
?>
<html>
<head>
    <title>Log in</title>
    <style>

        #outercontainer {
            height: 100%;
            width: 100%;
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: black;
        }

        #analytictext {
            font-family: "Stretch Pro";
            font-size: 60px;
            color: #FFFFFF;
            text-align: center;
            margin: auto;
            padding-top: 10%;
        }

        #footer {
            background-color: #5B5B5B;
            text-align: center;
            font-family: "Stretch Pro";
            font-size: 12pt;
            height: 45px;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        .column{
            width:19%;
            padding-left: .5%;
            padding-right: .5%;
            float:left
        }
        #number{
            font-size: 100pt;
            color:white;
            font-family: "Stretch Pro";
            text-align: center;
            margin-bottom:-10px;
        }
        #numdesc{
            font-size: 30pt;
            color:white;
            font-family: "Lora";
            text-align: center;
            margin-top:-5px;
        }
        .submitvote {
            border: none;
            width: 205px;
            height: 50px;
            background-color: #FFCC00;
            border-radius: 25px;
            font-family: "Stretch Pro";
            font-size: 20pt;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            align-content: center;
            margin-left: 18%;
        }

        .submitvote:hover {
            background-color: white;
        }
    </style>
</head>
<body style="margin: 0">


<div id="outercontainer">

    <?php
    include('login_Auth.php');
    include('header.php');
    ?>
    <div id="analytictext">
        USSER DDATA AWARRDS:<br>
        VOTE FOR YOUR FAVOURITE T00LS
    </div>
    <div class="column">
        <img src="drillpress.jpeg" width="100%" height="350px">
        <h1 id="numdesc" >Drill Press</h1>
        <input type="submit" class="submitvote" value="VOTE">

    </div>
    <div class="column">
        <img src="hassdrill.png" width="100%" height="350px">
        <h1 id="numdesc" >HAAS Mill</h1>
        <input type="submit" class="submitvote" value="VOTE">

    </div>
    <div class="column">
        <img src="earthauger.jpeg" width="100%" height="350px">
        <h1 id="numdesc" >Earth Auger</h1>
        <input type="submit" class="submitvote" value="VOTE">

    </div>
    <div class="column">
        <img src="eggbdrill2.jpeg" width="100%" height="350px">
        <h1 id="numdesc" >Egg Beater Drill</h1>
        <input type="submit" class="submitvote" value="VOTE">

    </div>
    <div class="column">
        <img src="wishdrill.png" width="100%" height="350px">
        <h1 id="numdesc" >Wish.com Drill</h1>
        <input type="submit" class="submitvote" value="VOTE">

    </div>

    <div id="footer">
        <br>
        this site is powered by the graciousness of cohort 8
    </div>
</div>

</body>
</html>