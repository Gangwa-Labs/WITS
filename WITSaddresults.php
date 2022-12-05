<?php

$host = "webdev.iyaclasses.com";
$userid = "ebird_JimJobBob";
$userpw = "Treesap3#";
$db = "ebird_WITS1";


?>
<html>
<head>
    <link href="https://fonts.cdnfonts.com/css/stretch-pro" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>

    <title>Add Database | WITS </title>
</head>

<style>
    *
    {
        margin: 0px;
        padding: 0px;
    }
    #outercontainer {
        background-color: #202020;
        height: 100%;
        width: 100%;
        font-family: 'Lora';
    }

    #largetextwhite {
        font-family: 'StretchProBasic';
        font-size: 100px;
        color: #F0F0F0;
        margin-top: 250px;
        text-align: left;
        padding-left: 50px;
    }

    #largetextblack {
        font-family: 'StretchProBasic';
        background-color: #FFCC00;
        font-size: 100px;
        color: #000000;
        margin-left: 50px;
        width: 80%;

        border-style: hidden;
    }
    #textcontainer{
        background-color: #FFCC00;
        height:150px;
        display: flex;
        align-items: center;
    }

    #footer{
        background-color: #5B5B5B;
        text-align: center;
        font-family: "Stretch Pro";
        font-size: 12pt;
        height:45px;
        color:white;
        position: absolute;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        bottom: 0;
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
        margin-left: 30px;
        font-weight: bold;
    }

    .submitButton:hover {
        background-color: white;
    }
    hr{
        color: #FFCC00;
    }


</style>

<body>

<div id="outercontainer">
    <?php
    include('header.php');
    ?>
    <div id="largetextwhite">
        SUBMIT NEW <br> LOCATION
    </div>

    <div id="totext">
        AS
    </div>
    <div id="textcontainer">
        <input type="text" id="largetextblack" placeholder="type here...">
    </div>
    <br>
    <input type="submit" class="submitButton" value="confirm">

    <div id="footer">
        this site is powered by the graciousness of cohort 8
    </div>

</div>
</body>

</html>