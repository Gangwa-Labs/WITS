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
<body>
<?php include ('admin_Login_Auth.php'); ?>
<?php include('admin_header.php') ?>
<form>
    <?php

    $sql = "SELECT * FROM allTools";
    $results = $mysql->query($sql);

    if (!$results) {
        echo "DB Query Problem <hr>";
        echo $mysql->error;
        exit();
    }
    while ($currentRow = $results->fetch_assoc()) {
        echo "ToolName:  " . $currentRow["toolName"] . "  quantity:  " . $currentRow["quantity"] . "  details:  " . $currentRow["details"] . "  location:  " . $currentRow["location"] . "  material:  " . $currentRow["material"] . "  tool type:  " . $currentRow["toolType"] . "</a>    <a href='admin-edit.php?toolID=" . $currentRow["toolID"] . "'>EDIT</a>
<a href='admin-delete.php?toolID=" . $currentRow["toolID"] . "'>DELETE</a>
<br><br><hr>";
    }
    echo "<a href = 'admin-add.php'> ADD to Tools database<br></a>";
    echo " Materials Database:";
    echo "<a href = 'about:blank'> ADD, </a>";
    echo "<a href = 'about:blank'> EDIT, </a>";
    echo "<a href = 'about:blank'> DELETE <br></a>";
    echo " Location Database:";
    echo "<a href = 'about:blank'> ADD, </a>";
    echo "<a href = 'about:blank'> EDIT, </a>";
    echo "<a href = 'about:blank'> DELETE <br></a>";
    echo " Tool Type Database:";
    echo "<a href = 'about:blank'> ADD, </a>";
    echo "<a href = 'about:blank'> EDIT, </a>";
    echo "<a href = 'about:blank'> DELETE <br></a>";
    echo " user Database:";
    echo "<a href = 'about:blank'> ADD, </a>";
    echo "<a href = 'about:blank'> EDIT, </a>";
    echo "<a href = 'about:blank'> DELETE <br></a>";

    ?>
</form>
</body>
</html>
