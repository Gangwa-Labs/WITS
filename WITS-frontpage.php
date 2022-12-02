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
    <title>WITS Frontpage</title>
    <style>
        #outercontainer{
            width:100%;
            background-image: url("makerspace1.png");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        #logoimage {
            position: absolute;
            width: 250px;
            float: left;
        }
        #navbar {
            height: 150px;
            font-family: stretch;
            font-size: 16px;
            color: #F0F0F0;
            position: absolute;
            margin-top: 30px;
            margin-left: 1100px;
            word-spacing: 40px;
        }
        
    </style>
</head>

<body>

<div id="outercontainer">

    <img id="logoimage" src="witslogo.png">

    <div id="navbar">
        account edit contact catalog search
    </div>

    <div id="middletext">
        WHHAT AREE YOU <br> L00KINNG FORR?
    </div>

    <form id="searchbar" action="WITSresults.php">
        <input style=
               "width: 800px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 20px;
                    opacity: 80%;"
               type="text" name="search" placeholder="  search...">
    </form>

    <div id="featuredtools"> POPPULAR T00LLS</div>

    <img id="toolimage1" src="orbital.jpeg">
    <img id="toolimage2" src="jigsaw.jpeg">
    <img id="toolimage3" src="drill.jpg">

    <div id="description1">
        Tool name: Orbital Sander <br>
        Brand: Dewalt <br>
        Location: The cage <br>
    </div>

    <div id="description2">
        Tool name: Jigsaw <br>
        Brand: Dewalt <br>
        Location: The cage <br>
    </div>

    <div id="description3">
        Tool name: Power Drill <br>
        Brand: Dewalt <br>
        Location: The cage <br>
    </div>
    
    <div id="featuredtools" style="margin-top:2332px"> CATEGOORIES</div>
    
    <div id="categorycon">
        <div id="catbox"></div>
        <div id="catbox" style="left:939px;top:2362px;"></div>
        <div id="catbox" style="left: 295px;top:2362px;"></div>
        <div id="catbox" style="left: 163px;top: 2382px;"></div>
        <div id="catbox" style="left: 1114px;top: 2382px;"></div>
    
    
    </div>


</div>

</body>


</html>
