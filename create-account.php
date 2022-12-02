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
    <title>Create Account</title>
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
        opacity: 80%;
    }

    @font-face {
        font-family: stretch;
        src: url(StretchPro.otf);
    }

    #middletext {
        font-family: stretch;
        font-size: 60px;
        color: white;
        position: absolute;
        text-align: center;
        margin-top: 330px;
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


    <div id="middletext">
        CRREATEE AN <br> ACCOUNNT
    </div>

    <form id="username" action = "">
        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;"
               type="text" name="username" placeholder="  username">
    </form>

    <form id="email" action = "">
        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;"
               type="text" name="email" placeholder="  email">
    </form>

    <form id="password" action = "">
        <input style =
               "width: 400px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 10px;
                    opacity: 80%;"
               type="text" name="password" placeholder="  password">
    </form>

    <input type="submit" value="create account" style =
                   "width: 200px;
                    height: 40px;
                    font-size: 20px;
                    border-radius: 20px;
                    opacity: 95%;
                    margin-top: 700px;
                    margin-left: 520px"
           name="createAccount" placeholder="create account"
           
</div>

</body>




</html>
