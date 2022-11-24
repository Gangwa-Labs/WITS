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
<head></head>
<body>
<?php
if ($_REQUEST["error"] == null) {
    echo "no log in processed";
    ?>
    <form>
        <input type="text" name="email">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit">
        <input type="hidden" name="error" value="0">
    </form>
    <?php
} else {
    $email = $_REQUEST["email"];
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];
    $dupCheck = "SELECT userID FROM user WHERE email = '".$email."'";
    echo $dupCheck;
    $results = $mysql->query($dupCheck);
    if (!$results) {
        echo "DB Query Problem <hr>";
        echo $db->error;
        exit();
    } else {
        $dupErrorCheck = $results->fetch_assoc();
        if($dupErrorCheck["userID"] == null){
            echo "account not found";
        }
    }
    //}
}


?>
</body>
</html>