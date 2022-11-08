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
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div id="outercontainer">

    <img id="bgimage" src="makerspace1.png">
    <img id="logoimage" src="witslogo.png">

    <div id="navbar">
        account edit contact catalog search
    </div>

    <div id="middletext">
        WHHAT AREE YOU <br> LOOKINNG FORR?
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

    <div id="quote">
        The wealth of tools in the maker spaces are intended to enable undirected creative experimentation, not merely
        facilitate a specific <br> class project or research. “I think that a program that attracts makers and doers
        like the Academy must commit to making the act of <br> creation accessible,” said Surovsky. “Having a space to
        make a mess, explore, and experiment is essential for the pursuit of innovation.” <br>
        <br> <strong>Scroll below to check out our growing catalogue of tools!</strong>
    </div>

    <div id="featuredtools"> FEEATUURED T00LLS</div>

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


</div>

</body>


</html>
