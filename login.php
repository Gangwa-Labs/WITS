<?php
session_start();
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
    <title>log in</title>
    <style>
        #displayUsername{
            background-color: black;
            width: 10vw;
            color: white;
            float: right;
        }
    </style>
</head>
<body>
<?php
if($_REQUEST["loggedIn"] != "1"){
    echo "log in please";
?>


<form>
    <input type="hidden" name="loggedIn" value="1">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit">
</form>
<?php
} else {
    if($_REQUEST["username"] != null && $_REQUEST["password"] != null){
        $sql = "SELECT * FROM user WHERE username = '". $_REQUEST["username"] ."' AND password = '".$_REQUEST["password"]."'";
        $results = $mysql -> query($sql);
        if(!$results){
            echo "DB Query Problem <hr>";
            echo $db -> error;
            exit();
        }
        $currentRow = $results->fetch_assoc();
        if($currentRow["userID"] == null){
            echo "user not found";
        }else{
            echo "user Id found<br><br>";
            $_SESSION["username"] = $currentRow["username"];
            $_SESSION["sessionID"] = $currentRow["userID"];
            echo $_SESSION["sessionID"];
        }
    }
    if($_SESSION["username"] != null) {
        $login =  "logged in as: " . $_SESSION["username"];

        echo "<div id='displayUsername'>".$login."</div>";
    }
}

?>


</body>
</html>