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
        #outercontaineraccount{
            width:100%;
            background-image: url("makerspace1.png");
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: black;
            height:100%;
        }
        #createtext {
            font-family: "Stretch Pro";
            font-size: 60px;
            color: #FFFFFF;
            text-align: center;
            margin: auto;
            padding-top:15%;
            width:50%;
        }
        #searchbar{
            margin: auto;
            align-content: center;
            text-align: center;

        }
        #footer{
            background-color: #5B5B5B;
            text-align: center;
            font-family: "Stretch Pro";
            font-size: 12pt;
            height:45px;
            color:white;
        }
        #columnholder{
            height:50px;
            text-align: center ;
            padding-bottom: 340px;
            color: white;
        }
        #columnholder a{
            text-decoration: underline;
            list-style-type: none;
            color: inherit;
        }
        #columnholder a:hover{
            text-decoration: underline;
            list-style-type: none;
            color: #FFCC00;
        }
        #accountparagraph{
            width:1000px;
            font-size: 18pt;
            text-align: center;
            margin:auto;
            color:white;
            font-family: Lora;
        }

    </style>
</head>
<body style="margin: 0">


<div id="outercontaineraccount">
    <?php
    include ('header.php');
    ?>

    <div id="createtext">
        EEDIT DETAILLS
    </div>
    <br>
    <div id="accountparagraph">
        Update any of your account information below:
    </div>

    <div id="searchbar">
        <?php
        if($_REQUEST["loggedIn"] != "1"){
            echo " ";
            ?>
            <br><br><br>
            <form>
                <input type="hidden" name="loggedIn" value="1">
                <input  style=
                        "width: 350px;
                        height: 30px;
                        font-size: 15px;
                        border-radius: 25px;
                        opacity: 80%;" type="text" name="email" placeholder=" email...">
                <br><br>

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
                <br><br><br>
                <input type="submit" name="submitusername" value="update details" style="
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
</div>
<div id="footer">
    <br>
    this site is powered by the graciousness of cohort 8
</div>

</body>
</html>