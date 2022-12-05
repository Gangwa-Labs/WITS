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
        #displayUsername {
            background-color: black;
            width: 10vw;
            color: white;
            float: right;
        }

        #outercontaineraccount {
            width: 100%;
            background-image: url("makerspace1.png");
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: black;
            height: 100%;
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
            padding-top: 15%;
            width: 50%;
        }

        #searchbar {
            margin: auto;
            align-content: center;
            text-align: center;

        }

        #footer {
            background-color: #5B5B5B;
            text-align: center;
            font-family: "Stretch Pro";
            font-size: 12pt;
            height: 45px;
            color: white;
        }

        #columnholder {
            height: 50px;
            text-align: center;
            padding-bottom: 340px;
            color: white;
        }

        #columnholder a {
            text-decoration: underline;
            list-style-type: none;
            color: inherit;
        }

        #columnholder a:hover {
            text-decoration: underline;
            list-style-type: none;
            color: #FFCC00;
        }

        #submitButton {
            border: none;
            width: 200px;
            height: 30px;
            background-color: #FFCC00;
            border-radius: 15px;
            font-family: Lora;
            font-size: 14pt;
            font-weight: bold;
        }

        #submitButton:hover {
            background-color: white;
        }

        .textfield {
            border: none;
            width: 350px;
            height: 30px;
            font-size: 15px;
            border-radius: 25px;
            opacity: 80%;
        }

        #errorMessage {
            color: red;
            width: 100%;
            height: 20px;
            position: absolute;
            top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #errorText {
            border-radius: 20px;
            background-color: black;
            padding: 10px;
            font-weight: bold;
        }
        #frontPagePortal {
            width: 30%;
            height: 75px;
            background-color: #FFCC00;
            font-size: 24pt;
            font-family: "Stretch Pro";
            color: black;
            border-radius: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
        }

        #frontPagePortal:hover {
            background-color: white;
        }
    </style>
</head>
<body style="margin: 0">


<div id="outercontaineraccount">

    <?php
    include('header.php');
    ?>
    <script>
        document.querySelector('#navList').style.display = 'none';
    </script>
    <div id="createtext">
        CRREATE AN ACCOUNNT
    </div>
    <div id="searchbar">

        <br><br>
        <form>
            <input type="hidden" name="loginAttempt" value="1">
            <input class="textfield" type="text" name="email" placeholder=" email..." required>
            <br><br>
            <input class="textfield" type="text" name="username" placeholder=" username..." required>
            <br><br>
            <input class="textfield" type="text" name="password" placeholder=" password..." required>
            <br><br>
            <input id="submitButton" type="submit" name="submitusername" value="create an account" required>
        </form>
    </div>

    <?php
        if ($_REQUEST['loginAttempt'] == 1) {
            $email = $_REQUEST["email"];
            $user = $_REQUEST["username"];
            $pass = $_REQUEST["password"];
            $dupCheck = "SELECT * FROM user WHERE email = '" . $email . "'";
            $results = $mysql->query($dupCheck);
            if (!$results) {
                echo "DB Query Problem <hr>";
                echo $db->error;
                exit();
            }
            $dupErrorCheck = $results->fetch_assoc();
            if ($dupErrorCheck["email"] == null) {
                $newAccount = "INSERT INTO user (email, username, password, typeID) VALUES ('" . $email . "','" . $user . "','" . $pass . "','1')";
                $newAccountResults = $mysql->query($newAccount);
                if (!$newAccountResults) {
                    echo "DB Query Problem <hr>";
                    echo $db->error;
                    exit();
                } else {
                    echo "<div id='errorMessage' style='color: green'><div id='errorText'>account created with email:" . $_REQUEST["email"] . "</div></div>";
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['userID'] = $newAccountResults["userID"];
                    $_SESSION['username'] = $_REQUEST["username"];
                    $_SESSION['email'] = $_REQUEST["email"];
                    echo "<script>
                    document.querySelector('#searchbar').style.display = 'none';
                    document.querySelector('#createtext').innerHTML = 'Find Your Tools <br><br>'
                </script>";
                    echo "<a style='text-decoration: none' href='WITS-frontpage.php'><div id='frontPagePortal'><div>WITS?</div></div></a>";
                }
            } else {
                echo "<div id='errorMessage'><div id='errorText'>account already associated with email: " . $_REQUEST["email"] . "</div></div>";
            }
        }
        ?>
</div>
<div id="footer">
    <br>
    this site is powered by the graciousness of cohort 8
</div>

</body>
</html>