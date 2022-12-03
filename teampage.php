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
            height: 100%;
            background-image: url("ourgoal1.png");
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
            padding-top:20%;
        }

        #teamimage1 {
            height: 350px;
            width: 350px;
            margin-left: 450px;
            margin-top: 200px;
            float: left;
        }

        #teamimage2 {
            height: 350px;
            width: 350px;
            margin-right: 450px;
            margin-top: 200px;
            float: right;
        }

        #teamimage3 {
            height: 350px;
            width: 350px;
            margin-left: 230px;
            margin-top: 50px;
            float: left;
        }

        #teamimage4 {
            height: 350px;
            width: 350px;
            margin-left: 130px;
            margin-top: 50px;
            float: left;
        }

        #teamimage5 {
            height: 350px;
            width: 350px;
            margin-right: 230px;
            margin-top: 50px;
            float: right;
        }




    </style>
</head>

<body style="margin: 0">

<div id="outercontainer">

    <?php
    include ('header.php');
    ?>

    <img id="teamimage1" src="teamezra.png">
    <img id="teamimage2" src="teammichael.png">
    <img id="teamimage3" src="teamaustin.png">
    <img id="teamimage4" src="teammarcos.png">
    <img id="teamimage4" src="teamjames.png">



</body>


</html>
