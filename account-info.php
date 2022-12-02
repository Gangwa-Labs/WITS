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
    <title>Account info</title>
</head>

<style>
    *
    {
        margin: 0px;
        padding: 0px;
    }

    #outercontainer {
        background-color: black;
        height: 1200px;
    }

    #bgimage {
        height: 1194px;
        position: absolute;
        opacity: 60%;
    }

    @font-face {
        font-family: stretch;
        src: url(StretchPro.otf);
    }

    #navbar {
        height: 150px;
        font-family: stretch;
        font-size: 16px;
        color: white;
        position: absolute;
        margin-top: 30px;
        margin-left: 1200px;
        word-spacing: 40px;
    }

    #middletext {
        font-family: stretch;
        font-size: 60px;
        color: white;
        position: absolute;
        text-align: center;
        margin-top: 330px;
        margin-left: 220px;
    }

    #middletext2 {
        font-family: stretch;
        font-size: 20px;
        color: #ffdd00;
        position: absolute;
        text-align: center;
        margin-top: 460px;
        margin-left: 520px;
    }


    #logoimage {
        position: absolute;
        width: 250px;
        float: left;
    }

    #username {
        position: absolute;
        margin-left: 520px;
        margin-top: 510px;
    }

    #email {
        position: absolute;
        margin-left: 520px;
        margin-top: 570px;
    }

    #password {
        position: absolute;
        margin-left: 520px;
        margin-top: 630px;
    }

</style>

<body>

<div id="outercontainer">

    <img id="bgimage" src="makerspace1.png">
    <img id="logoimage" src="witslogo.png">

    <div id="navbar">
        account info catalog search
    </div>


    <div id="middletext">
        ACCOUNNT INFOORMATION
    </div>
    <div id="middletext2">
        update any of your account information bellow:
    </div>

    <form id="username" action = "">
        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;"
               type="text" name="usernameUpdate" placeholder="  username">
    </form>

    <form id="email" action = "">
        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;"
               type="text" name="emailUpdate" placeholder="  email">
    </form>

    <form id="password" action = "">
        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;"
               type="text" name="passwordUpdate" placeholder="  password">
    </form>

    <input type="submit" value="update account" style =
    "width: 200px;
                    height: 40px;
                    font-size: 20px;
                    border-radius: 20px;
                    opacity: 95%;
                    margin-top: 700px;
                    margin-left: 520px;
                    background-color: #FFDD00FF;"
           name="updateAccount"

</div>

</body>
