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
    <title>Log in</title>
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
        .column{
            width:19%;
            padding-left: .5%;
            padding-right: .5%;
            float:left
        }
        #number{
            font-size: 100pt;
            color:white;
            font-family: "Stretch Pro";
            text-align: center;
            margin-bottom:-10px;
        }
        #numdesc{
            font-size: 30pt;
            color:white;
            font-family: "Lora";
            text-align: center;
            margin-top:-5px;
        }
    </style>
</head>
<body style="margin: 0">


<div id="outercontainer">

    <?php
    include('header.php');
    ?>
    <div id="analytictext">
        USSER DDATA AWARRDS:<br>
        MOOST SEEARCHEDD T00LSS
    </div>
    <div class="column">
        <h1 id="number"> #1 </h1>
        <img src="makerspace1.png" width="100%">
        <h1 id="numdesc" >Object 1</h1>
    </div>
    <div class="column">
        <h1 id="number"> #2 </h1>
        <img src="makerspace1.png" width="100%">
        <h1 id="numdesc" >Object 2</h1>

    </div>
    <div class="column">
        <h1 id="number"> #3 </h1>
        <img src="makerspace1.png" width="100%">
        <h1 id="numdesc" >Object 3</h1>
    </div>
    <div class="column">
        <h1 id="number"> #4 </h1>
        <img src="makerspace1.png" width="100%">
        <h1 id="numdesc" >Object 4</h1>

    </div>
    <div class="column">
        <h1 id="number"> #5 </h1>
        <img src="makerspace1.png" width="100%">
        <h1 id="numdesc" >Object 5</h1>

    </div>

    <div id="footer">
        <br>
        this site is powered by the graciousness of cohort 8
    </div>
</div>

</body>
</html>