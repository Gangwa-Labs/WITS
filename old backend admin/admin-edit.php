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
if (empty($_REQUEST["toolID"])) {
    exit("You have reached this edit page in error." .
        "Please click <a href='WITS-admin.php'>here</a> to start again.");
}
$sql = "SELECT * FROM allTools WHERE toolID = " . $_REQUEST["toolID"];
$results = $mysql->query($sql);
$allTools = $results->fetch_assoc();
if (!search) {
    echo "DB Query Problem <hr>";
    echo $mysql->error;
    exit();
}


?>
<html>
<body>
<?php
if($_REQUEST["conf"] != "yes"){
    ?>

<form>
    <input type="hidden" name="conf" value="yes">
    <input type="hidden" name="toolID" value="<?php echo $_REQUEST["toolID"]?>">
    toolName:
    <input name="toolName" type="text" value=<?php echo "'".$allTools["toolName"]."'"; ?>><br><br>
    Quantity:
    <input name="quantity" type="number" value=<?php echo $allTools["quantity"]; ?>><br><br>
    Details:
    <input name="details" type="text" value=<?php echo "'" . $allTools["details"] . "'"; ?>><br><br>
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
        while ($currentRow = $results->fetch_assoc()) {
            if ($allTools["locationID"] == $currentRow["locationID"]) {
                echo "<option value='" . $currentRow["locationID"] . "' selected>" . $currentRow["location"] . "</option>";
            } else {
                echo "<option value='" . $currentRow["locationID"] . "'>" . $currentRow["location"] . "</option>";
            }
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
        while ($currentRow = $results->fetch_assoc()) {
            if ($allTools["materialID"] == $currentRow["materialID"]) {
                echo "<option value='" . $currentRow["materialID"] . "' selected>" . $currentRow["material"] . "</option>";
            } else {
                echo "<option value='" . $currentRow["materialID"] . "'>" . $currentRow["material"] . "</option>";
            }
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
        while ($currentRow = $results->fetch_assoc()) {
            if ($allTools["typeID"] == $currentRow["typeID"]) {
                echo "<option value='" . $currentRow["typeID"] . "' selected>" . $currentRow["toolType"] . "</option>";
            } else {
                echo "<option value='" . $currentRow["typeID"] . "'>" . $currentRow["toolType"] . "</option>";
            }
        }
        ?>
    </select><br><br>
    <input type="submit" value="Push Edit">
</form>
<?php
} else {
    $sql = "UPDATE tool SET toolName = '".$_REQUEST["toolName"]."',
    quantity = '".$_REQUEST["quantity"]."',
    details = '".$_REQUEST["details"]."',
    locationID = '".$_REQUEST["locationID"]."',
    materialID = '".$_REQUEST["materialID"]."',
    typeID = '".$_REQUEST["typeID"]."' WHERE toolID =".$_REQUEST["toolID"];
    $results = $mysql->query($sql);
    if (!$results) {
        echo "DB Query Problem <hr>";
        echo $mysql->error;
        exit();
    }else{
        echo "edit good<br><br>";
        echo "<a href='WITS-admin.php'>Back to Admin Page</a>";

    }
}
?>
</body>
</html>
