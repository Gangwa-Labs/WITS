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
    <title>Log in</title>
    <style>
        #displayUsername{
            background-color: black;
            width: 10vw;
            color: white;
            float: right;
        }
        #outercontainer{
            width:100%;
            background-image: url("makerspace1.png");
            background-size: 100%;
            background-repeat: no-repeat;
            margin-left: -10px;
            margin-top: -10px;
            padding-right:20px;
            background-color: black;
        }
        #logoimage {
            position: absolute;
            width: 250px;
            float: left;
        }
        #logintext {
            font-family: "Stretch Pro";
            font-size: 40px;
            color: #FFFFFF;
            text-align: center;
            margin: auto;
            padding-top:20%;
        }
        #searchbar{
            margin: auto;
            align-content: center;
            text-align: center;
            padding-bottom: 340px;

        }
        #footer{
            background-color: #5B5B5B;
            text-align: center;
            font-family: "Stretch Pro";
            font-size: 12pt;
            height:45px;
            margin-left: -10px;
            margin-bottom: -10px;
            margin-right:-10px;
            color:white;
        }
        #columns{
            column-count: 3;
            column-gap: 30px;
        }
    </style>
</head>
<body>


<div id="outercontainer">

    <img id="logoimage" src="witslogo.png">
    <?php
    include ('header.php');
    ?>
    <div id="logintext">
       LOGGIN
    </div>
    <div id="searchbar">
        <?php
        if($_REQUEST["loggedIn"] != "1"){
            echo "log in please";
            ?>


            <form>
                <input type="hidden" name="loggedIn" value="1">
                <input  style=
                        "width: 350px;
                        height: 30px;
                        font-size: 15px;
                        border-radius: 25px;
                        opacity: 80%;" type="text" name="username" placeholder=" username...">
                <br><br>
                <input style=
                       "width: 350px;
                        height: 30px;
                        font-size: 15px;
                        border-radius: 25px;
                        opacity: 80%;" type="text" name="password" placeholder=" password...">
                <br><br>
                <input type="submit" name="submitusername" value="sign in" style="
                        width:200px;
                        height:30px;
                        background-color: #FFCC00;
                        border-radius: 15px;">
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
    </div>
    <div id="columns">
<a href="WITS-frontpage.php" target="_new">create an account</a>
<a href="WITS-frontpage.php" target="_new">create an account</a>
<a href="WITS-frontpage.php" target="_new">create an account</a>


    </div>
</div>
<div id="footer">
    <br>
    this site is powered by the graciousness of cohort 8
</div>

</body>
</html>