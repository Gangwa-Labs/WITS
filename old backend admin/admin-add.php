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

if ($_REQUEST["conf"] != "yes") {
?>e
<html>
<body>
<form action>
    <input type="hidden" name="conf" value="yes">
    toolName:
    <input name="toolName" type="text"><br><br>
    Quantity:
    <input name="quantity" type="number"><br><br>
    Details:
    <input name="details" type="text"><br><br>
    Location:
    <select name="locationID">
        <?php
        $sql = "SELECT * FROM location";
        $results = $mysql->query($sql);

        if (!$results) {
            echo "DB Query Problem <hr>";
            echo $mysql->error;
            exit();
        }
        while($currentRow = $results->fetch_assoc()){
        echo "<option value='".$currentRow["locationID"]."'>".$currentRow["location"]."</option>";
        }
        ?>
    </select><br><br>
    Material:
    <select name="materialID">
        <?php
        $sql = "SELECT * FROM material";
        $results = $mysql->query($sql);

        if (!$results) {
            echo "DB Query Problem <hr>";
            echo $mysql->error;
            exit();
        }
        while($currentRow = $results->fetch_assoc()){
            echo "<option value='".$currentRow["materialID"]."'>".$currentRow["material"]."</option>";
        }
        ?>
    </select><br><br>
    Tool Type:
    <select name="typeID">
        <?php
        $sql = "SELECT * FROM toolType";
        $results = $mysql->query($sql);

        if (!$results) {
            echo "DB Query Problem <hr>";
            echo $mysql->error;
            exit();
        }
        while($currentRow = $results->fetch_assoc()){
            echo "<option value='".$currentRow["typeID"]."'>".$currentRow["toolType"]."</option>";
        }
        ?>
    </select><br><br>
    <input type="submit">

</form>
<?php
} else {$sql = "INSERT INTO tool (toolName, quantity, details, locationID, materialID, typeID) VALUES ('".$_REQUEST["toolName"]."',".$_REQUEST["quantity"].",'".$_REQUEST["details"]."',".$_REQUEST["locationID"].",".$_REQUEST["materialID"].",".$_REQUEST["typeID"].")";
$results = $mysql -> query($sql);
if(!$results){
    echo "DB Query Problem <hr>";
    echo $db -> error;
    exit();
}else{
    echo "<br><br>tool added Successfully<br><br>";
    echo "<a href='WITS-admin.php'>Back to Admin Page</a>";
}
}
?>
</body>
</html>
