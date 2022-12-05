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
    <title>Analytics</title>
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

        #searchbar {
            margin: auto;
            align-content: center;
            text-align: center;
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

        #columnholder {
            height: 50px;
            text-align: center;
            padding-bottom: 340px;
            color: white;
        }

        #columnholder a {
            text-decoration: underline;
            list-style-type: none;
            color: inherit;
        }

        #columnholder a:hover {
            text-decoration: underline;
            list-style-type: none;
            color: #FFCC00;
        }
        #dataimg{
            width:100%
            height:500px;
            background-image: url("IYA/Semester 3 - 2022/Dev II/PhpStorm/WITS/makerspace1.png");
            background-size: auto;
            background-repeat: no-repeat;

        }
        #dataimage{
            text-align: center;
        }
    </style>
</head>
<body style="margin: 0">


<div id="outercontainer">

    <?php
    include('admin_header.php');
    include('admin_Login_Auth.php');
    ?>
    <div id="analytictext">
        PAGGE ANALYTICCS
        <br><br>
    </div>
    <div id="dataimage">
        <img src="analytics.png" height="60%">
    </div>
</div>
<div id="footer">
    <br>
    this site is powered by the graciousness of cohort 8
</div>
</body>
</html>