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
    <title>Info page</title>
    <style>
        #outercontainer{
            width:100%;
            background-image: url("ourgoal1.png");
            background-size: 100%;
            background-repeat: no-repeat;
            margin: 0;
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

<body style="margin: 0">
<?php
include ('login_Auth.php');
?>
<div id="outercontainer">
    <?php
    include ('header.php');
    ?>


    <div id="middletext">
        OUR GOOAL

        <p style="font-family: Times; font-size: 20pt;">What’s In The Shop is here to remind Iovine & Young students to Use Their WITS™. Before you <br>
            even need to enter the makerspace, take the chance to peruse our catalogues and check the <br>
            availability of tools and devices. We hope to make your maker-experience more convenient and <br>
            streamlined, opening up different opportunities for you to develop as a disruptive innovator. </p>

        <p> <a style=" text-decoration = none; font-size: 20px; font-family: Times; color: #FFCC00" href="teampage.php">Check out the team who made it possible!</a> </p>
        <br><br>
    </div>


<div id="footer">
    <br>
    this site is powered by the graciousness of cohort 8
</div>
</body>


</html>
