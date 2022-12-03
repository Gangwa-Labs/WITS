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

if($mysql -> errno){
    echo "DB Connection Error <br>";
    echo $mysql -> connect_error;
    exit();
}

?>

<html>
<head>
    <title>Team</title>
    <style>
        #outercontainer{
            width:100%;
            background-image: url("ourgoal1.png");
            background-size: 100%;
            background-repeat: no-repeat;
            margin-left: -10px;
            margin-top: -10px;
            padding-right:20px;
            background-color: black;
        }

        #middletext {
            font-family: "Stretch Pro";
            font-size: 80px;
            color: #FFFFFF;
            text-align: center;
            margin: auto;
            padding-top:20%;
        }

        #teamimage {
            font-family: Times;
            text-align: center;
            width: 200px;
            height: 200px;
            border-radius: 100px;
        }

        #footer{
            background-color: #5B5B5B;
            text-align: center;
            font-family: "Stretch Pro";
            font-size: 12pt;
            height:45px;
            margin-left: -10px;
            margin-bottom: -10px;
            margin-right:-10px;
            color:white;
        }
    </style>
</head>

<body>

<div id="outercontainer">


    <?php
    include ('header.php');
    ?>
    <div id="middletext">

        <img id="teamimage" src="ezra.png">
        <p style="font-family: Times; font-size: 40px">Ezra Bird</p>
        <img id="teamimage" src="michael.png">
        <p style="font-family: Times; font-size: 40px">Michael Steele</p>


    </div>


    <div id="footer">
        <br>
        this site is powered by the graciousness of cohort 8
    </div>
</body>


</html>
