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
    <title>Create an Account</title>
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
            margin-left: -10px;
            margin-top: -10px;
            padding-right:20px;
            background-color: black;
            height:100%;
        }
        #logoimage {
            position: absolute;
            width: 250px;
            float: left;
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
            margin-left: -10px;
            margin-bottom: -10px;
            margin-right:-10px;
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


    </style>
</head>
<body>


<div id="outercontaineraccount">

    <?php
    include ('header.php');
    ?>
    <div id="createtext">
        CRREATE AN ACCOUNNT
    </div>
    <div id="searchbar">
        <?php
        if($_REQUEST["loggedIn"] != "1"){
            echo " ";
            ?>

        <br><br>
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
                <br><br>
                <input type="submit" name="submitusername" value="create an account" style="
                        width:200px;
                        height:30px;
                        background-color: #FFCC00;
                        border-radius: 15px;">
            </form>
            <?php
        } else {
            $email = $_REQUEST["email"];
            $user = $_REQUEST["username"];
            $pass = $_REQUEST["password"];
            $dupCheck = "SELECT userID FROM user WHERE email = '" . $email . "'";
            echo $dupCheck;
            $results = $mysql->query($dupCheck);
            if (!$results) {
                echo "DB Query Problem <hr>";
                echo $db->error;
                exit();
            } else {
                $dupErrorCheck = $results->fetch_assoc();
                if ($dupErrorCheck["userID"] == null) {
                    $newAccount = "INSERT INTO user (email, username, password, typeID) VALUES ('" . $email . "','" . $user . "','" . $pass . "','1')";
                    echo $newAccount;
                    $newAccountResults = $mysql->query($newAccount);
                    if (!$newAccountResults) {
                        echo "DB Query Problem <hr>";
                        echo $db->error;
                        exit();
                    } else {
                        echo "account created with Username: " . $_REQUEST["username"];
                    }
                } else {
                    echo "account already associated with email: " . $_REQUEST["email"];
                }

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