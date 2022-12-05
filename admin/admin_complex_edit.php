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
$select = "SELECT * FROM allTools WHERE toolID = " . $_REQUEST["editID"];
$results = $mysql->query($select);
if (!$results) {
    echo "DB Query Problem <hr>";
    echo $mysql->error;
    exit();
}
$editTool = $results->fetch_assoc();

?>

<html>

<head>
    <link href="https://fonts.cdnfonts.com/css/stretch-pro" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>

    <title>Edit Database | WITS </title>
</head>

<style>
    * {
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
        font-family: "Stretch Pro";
        font-size: 100px;
        color: #F0F0F0;
        text-align: left;
        padding-left: 50px;
    }

    #largetextblack {
        font-family: 'Stretch Pro';
        background-color: #FFCC00;
        font-size: 100px;
        color: #000000;
        width: 100%;
        padding-left: 20px;
        border-style: hidden;
    }

    #largetextdropdown {
        font-family: 'Stretch Pro';
        background-color: #FFCC00;
        font-size: 100px;
        color: #000000;
        width: 100%;
        padding-left: 20px;
        border-style: hidden;
    }

    ::-webkit-file-upload-button {
        display: none;
    }

    #textcontainer {
        background-color: #FFCC00;
        height: 150px;
        display: flex;
        align-items: center;
    }

    #text {
        color: white;
        font-family: "Stretch Pro";
        font-size: 40pt;
        background-color: #202020;
    }

    #footer2 {
        background-color: #5B5B5B;
        text-align: center;
        font-family: "Stretch Pro";
        font-size: 12pt;
        height: 45px;
        color: white;
        position: absolute;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .submitButton {
        border: none;
        width: 205px;
        height: 50px;
        background-color: #FFCC00;
        border-radius: 25px;
        font-family: "Stretch Pro";
        font-size: 20pt;
        font-weight: bold;
        margin-left: 30px;
        margin-bottom: 20px;
    }

    .submitButton:hover {
        background-color: white;
    }

    hr {
        color: #FFCC00;
    }


</style>

<body>
<?php
if ($_REQUEST["submitAttempt"] == 1) {
    $sql = "UPDATE tool SET 
                toolName = '".$_REQUEST["toolName"]."',
                quantity = '".$_REQUEST["quantity"]."',
                details = '".$_REQUEST["details"]."',
                locationID = '".$_REQUEST["locationID"]."',
                materialID = '".$_REQUEST["materialID"]."',
                typeID = '".$_REQUEST["typeID"]."' WHERE toolID = " . $_REQUEST["editID"];
    $results = $mysql->query($sql);
    if (!$results) {
        echo "DB Query Problem <hr>";
        echo $mysql->error;
        exit();
    }else{
        echo "<script>alert('successfully edited new tool')</script>";
    }
}
?>

<div id="outercontainer">
    <?php
    include('admin_header.php');
    ?>
    <div id="largetextwhite" style="margin-top: 200px;">
        EDIT<br>
        <?php echo $editTool["toolName"] ?>
    </div>
    <br>
    <form id="text" action>
        <input type="hidden" name="submitAttempt" value="1">
        &nbsp; T00L NAME:
        <input name="toolName" type="text" required id="largetextblack" style="font-family: 'StretchProBasic'" placeholder="<?php echo $editTool["toolName"] ?>"><br><br>
        &nbsp; QUANTITY:
        <input name="quantity" type="number" required id="largetextblack"
               style="font-family: 'StretchProBasic'" placeholder="<?php echo $editTool["quantity"] ?>"><br><br>
        &nbsp; DETAILS:
        <input name="details" type="text" required id="largetextblack" style="font-family: 'StretchProBasic'" placeholder="<?php echo $editTool["details"] ?>"><br><br>
        &nbsp; LOCATION:
        <select name="locationID" id="largetextdropdown" required>
            <?php
            $sql = "SELECT * FROM location";
            $results = $mysql->query($sql);

            if (!$results) {
                echo "DB Query Problem <hr>";
                echo $mysql->error;
                exit();
            }
            while ($currentRow = $results->fetch_assoc()) {
                if($currentRow["locationID"] == $editTool["locationID"]){
                    echo "<option selected value='" . $currentRow["locationID"] . "'>" . $currentRow["location"] . "</option>";
                } else {
                    echo "<option value='" . $currentRow["locationID"] . "'>" . $currentRow["location"] . "</option>";
                }
            }
            ?>
        </select><br><br>
        &nbsp; MATERIAL:
        <select name="materialID" id="largetextdropdown">
            <?php
            $sql = "SELECT * FROM material";
            $results = $mysql->query($sql);

            if (!$results) {
                echo "DB Query Problem <hr>";
                echo $mysql->error;
                exit();
            }
            while ($currentRow = $results->fetch_assoc()) {
                if ($currentRow["materialID"] == $editTool["materialID"]) {
                    echo "<option selected value='" . $currentRow["materialID"] . "'>" . $currentRow["material"] . "</option>";
                } else {
                    echo "<option value='" . $currentRow["materialID"] . "'>" . $currentRow["material"] . "</option>";
                }
            }
            ?>
        </select><br><br>
        &nbsp; T00L TYPE:
        <select name="typeID" id="largetextdropdown">
            <?php
            $sql = "SELECT * FROM toolType";
            $results = $mysql->query($sql);

            if (!$results) {
                echo "DB Query Problem <hr>";
                echo $mysql->error;
                exit();
            }
            while ($currentRow = $results->fetch_assoc()) {
                if ($currentRow["typeID"] == $editTool["typeID"]) {
                    echo "<option selected value='" . $currentRow["typeID"] . "'>" . $currentRow["toolType"] . "</option>";
                } else {
                    echo "<option value='" . $currentRow["typeID"] . "'>" . $currentRow["toolType"] . "</option>";
                }
            }
            ?>
        </select><br><br>
        <input type="hidden" name="editID" value="<?php echo $_REQUEST["editID"] ?>">
        <input type="submit" class="submitButton" value="SUBMIT">

    </form>
    <?php
//    $sql = "INSERT INTO tool (toolName, quantity, details, locationID, materialID, typeID) VALUES ('".$_REQUEST["toolName"]."',".$_REQUEST["quantity"].",'".$_REQUEST["details"]."',".$_REQUEST["locationID"].",".$_REQUEST["materialID"].",".$_REQUEST["typeID"].")";
//        $results = $mysql -> query($sql);
//        if(!$results){
//            echo "DB Query Problem <hr>";
//            echo $db -> error;
//            exit();
//        }else{
//            echo "<br><br>tool added Successfully<br><br>";
//            header('Location: admin_db_nav.php?');
//        }
//
//    ?>
    <div id="footer2">
        this site is powered by the graciousness of cohort 8
    </div>

</div>
</body>

</html>