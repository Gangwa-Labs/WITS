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
        font-family: 'Lora';
    }

    @font-face {
        font-family: 'Stretch Pro';

    }
    #navbar {
        height: 150px;
        font-family: 'Stretch Pro';
        font-size: 16px;
        color: #F0F0F0;
        padding-top: 2%;
        text-align: right;
        padding-right: 10%;
        word-spacing: 40px;
    }

    #largetextwhite {
        font-family: 'Stretch Pro';
        font-size: 100px;
        color: #F0F0F0;
        text-align: left;
        padding-top: 5%;
        padding-left: 10%
    }

    #largetextblack {
        font-family: 'Stretch Pro';
        background-color: #FFCC00;
        font-size: 100px;
        color: #000000;
        margin-left: 10%;
        width: 80%;
        border-style: hidden;
    }
    #textcontainer{
        background-color: #FFCC00;
        height:150px;
        padding-top: 100px;

    }

    #footer {
        font-family: 'Stretch Pro';
        background-color: #5B5B5B;
        width: 100%;
        padding-top:10px;
        padding-bottom:10px;
        color: #ffffff;
        text-align: center;
        margin-top: 12%;
    }

    #totext {
        font-family: 'Stretch Pro';
        font-size: 50px;
        color: #F0F0F0;
        text-align: left;
        margin-left: 10%;
        margin-bottom: 1%;
    }

    #submit {
        font-family: 'Stretch Pro';
        font-size: 20px;
        color: #000000;
        background-color: #FFCC00;
        border-radius: 20px;
        border-color: white;
        padding: 6px;
        margin-left: 10%;
        margin-top: 2%
    }

    #logoimage {
        width: 250px;
        float: left;
    }

    #searchicon {
        width: 35px;
        float: right;
        padding-right: 5%;
        padding-top: 1.5%;
    }

    hr{
        color: #FFCC00;
    }

    /*@media only screen and (max-width: 868px) {*/
    /*    #outercontainer {*/
    /*        background-color: #202020;*/
    /*        height: 980px;*/
    /*        font-family: 'Lora';*/
    /*    }*/

    /*    #footer {*/
    /*        font-family: 'Stretch Pro';*/
    /*        background-color: #5B5B5B;*/
    /*        width: 100%;*/
    /*        padding-top:10px;*/
    /*        padding-bottom:10px;*/
    /*        position: absolute;*/
    /*        color: #ffffff;*/
    /*        text-align: center;*/
    /*        margin-top: 950px;*/
    /*        font-size: 10px;*/
    /*    }*/

    /*    #totext {*/
    /*        font-family: 'Stretch Pro';*/
    /*        font-size: 40px;*/
    /*        color: #F0F0F0;*/
    /*        position: absolute;*/
    /*        text-align: left;*/
    /*        margin-top: 490px;*/
    /*        margin-left: 80px;*/
    /*    }*/

    /*    #submit {*/
    /*        font-family: 'Stretch Pro';*/
    /*        font-size: 20px;*/
    /*        color: #000000;*/
    /*        background-color: #FFCC00;*/
    /*        border-radius: 20px;*/
    /*        border-color: white;*/
    /*        padding: 5px;*/
    /*        margin-top: 630px;*/
    /*        margin-left:80px;*/
    /*    }*/

    /*    #logoimage {*/
    /*        position: absolute;*/
    /*        width: 80px;*/
    /*        float: left;*/
    /*    }*/

    /*    #searchicon {*/
    /*        position: absolute;*/
    /*        width: 10px;*/
    /*        float: right;*/
    /*        margin-left: 465px;*/
    /*        margin-top: 26px;*/
    /*    }*/

    /*    #navbar {*/
    /*        height: 150px;*/
    /*        font-family: 'Stretch Pro';*/
    /*        font-size: 5px;*/
    /*        color: #F0F0F0;*/
    /*        position: absolute;*/
    /*        margin-top: 30px;*/
    /*        margin-left: 150px;*/
    /*        word-spacing: 40px;*/
    /*    }*/

    /*    #largetextblack {*/
    /*        font-family: 'Stretch Pro';*/
    /*        background-color: #FFCC00;*/
    /*        font-size: 40px;*/
    /*        color: #000000;*/
    /*        position: absolute;*/
    /*        margin-top: 550px;*/
    /*        padding-top:10px;*/
    /*        padding-bottom:10px;*/
    /*        width: 80%;*/
    /*        margin-left: 80px;*/
    /*    }*/


    /*    #largetextwhite {*/
    /*        font-family: 'Stretch Pro';*/
    /*        font-size: 40px;*/
    /*        color: #F0F0F0;*/
    /*        position: absolute;*/
    /*        text-align: left;*/
    /*        margin-top: 400px;*/
    /*        margin-left: 80px;*/
    /*    }*/
    /*}*/

</style>

<body>

<div id="outercontainer">

    <?php
    include('header.php');
    ?>

    <div id="largetextwhite">
      EDIT "OPTION 1" <br>
    </div>

    <div id="totext">
        TO
    </div>
    <br>
    <div id="textcontainer">
        <input type="text" id="largetextblack" placeholder="type here...">
    </div>
    <input type="submit" id="submit" value="confirm">

    <div id="footer">
        this site is powered by the graciousness of cohort 8
    </div>

</div>
</body>

</html>