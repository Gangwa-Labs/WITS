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
            height: 1000px;
            background-image: url("makerspace1.png");
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
        EDIT DETAILLS
        <p style="font-size: 20px; color: #FFCC00">update any of your account information bellow:</p>
    </div>

    <form action="">
        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;
                    margin-left: 690px;"
               type="text" name="usernameUpdate" placeholder="  username">

        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;
                    margin-left: 690px;
                    margin-top: 20px;"
               type="text" name="emailUpdate" placeholder="  email">

        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;
                    margin-left: 690px;
                    margin-top: 20px;"
               type="text" name="passwordUpdate" placeholder="  password">
    </form>

    <form  action="">
        <input  type="submit" value="update account" style =
        "width: 200px;
                    height: 40px;
                    font-size: 20px;
                    border-radius: 20px;
                    opacity: 95%;
                    margin-top: 20px;
                    margin-left: 690px;
                    background-color: #FFDD00FF;"
               name="updateAccount"
    </form>





</body>


</html>
