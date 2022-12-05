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
$databaseName = $_REQUEST["databaseName"];
$dataID = $_REQUEST["dataID"];
$title = $_REQUEST["title"];

$sql = "SELECT * FROM " . $databaseName;
$results = $mysql->query($sql);

if (!$results) {
    echo "DB Query Problem <hr>";
    echo $mysql->error;
    exit();
}
while ($currentrow = $results->fetch_assoc()) {
    if ($currentrow[$dataID] == $_REQUEST["editID"]) {
        $editValue = $currentrow["toolName"];
    }
}

?>
<html>
<head>
    <link href="https://fonts.cdnfonts.com/css/stretch-pro" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>

    <title>Delete Database | WITS </title>
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
        font-family: 'Stretch Pro';
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
<?php
if ($_REQUEST["submitAttempt"] == 1) {
    $sql = "DELETE FROM " . $databaseName . " WHERE " . $dataID . "= " . $_REQUEST["editID"];
    $results = $mysql->query($sql);
    if (!$results) {
        echo "DB Query Problem <hr>";
        echo $mysql->error;
        exit();
    } else {
        echo "<script>alert('data: " . $editValue . " has been deleted')</script>";
        header('Location: admin_db_nav.php?');
    }
}
?>

<div id="outercontainer">

    <?php
    include('admin_header.php');
    ?>
    <?php
    include('admin_Login_Auth.php');
    ?>
    <form>
        <div id="largetextwhite">
            ARE YOU SURE <br>YOU WANT TO  <br>DELETE?
        </div>

        <div id="textcontainer">
            <input type="hidden" name="submitAttempt" value="1">
            <div id="largetextblack"><div><?php echo $editValue?></div></div>
        </div>
        <br>

        <button type="submit" class="submitButton" value="confirm">confirm</button>
        <input type="hidden" name="editID" value= <?php echo $_REQUEST["editID"]?>>
        <input type="hidden" name="databaseName" value= <?php echo $databaseName?>>
        <input type="hidden" name="dataID" value= <?php echo $dataID?>>
        <input type="hidden" name="title" value= <?php echo $title?>>
    </form>
    <div id="footer">
        <div>this site is powered by the graciousness of cohort 8</div>
    </div>


</div>
</body>

</html>