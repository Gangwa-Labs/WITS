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
    echo "Confirm Delete";
    // display confirmation form
?>
<form>

	<input type="hidden" name="toolID"
	value="<?php echo $_REQUEST["toolID"] ?>">
	<input type="hidden" name="conf" value="yes">
	<input type="submit" value="Confirm Deletion">
</form>
<?php
} else {
	$sql = "DELETE FROM tool WHERE toolID = " . $_REQUEST["toolID"];
    $results = $mysql->query($sql);

    if (!$results) {
        echo "DB Query Problem <hr>";
        echo $mysql->error;
        exit();
    }else{
        echo "delete good<br><br>";
        echo "<a href='WITS-admin.php'>Back to Admin Page</a>";

    }
}?>
<html>
<body>

</body>
</html>
