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
<head>
    <title>Log in</title>
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

        #accountparagraph {
            width: 1000px;
            font-size: 18pt;
            text-align: center;
            margin: auto;
            color: white;
            font-family: Lora;
        }

        .submitButton {
            border: none;
            width: 175px;
            height: 30px;
            background-color: #FFCC00;
            border-radius: 15px;
            font-family: Lora;
            font-size: 14pt;
            font-weight: bold;

        }

        .submitButton:hover {
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

        #accountButtons {
            gap: 10px;
        }
    </style>
</head>
<body style="margin: 0">
<?php
include('login_Auth.php');
?>

<div id="outercontaineraccount">
    <?php
    include('header.php');
    ?>

    <div id="createtext">
        EEDIT DETAILLS
    </div>
    <br>
    <div id="accountparagraph">
        Update any of your account information below:
    </div>
    <div id="searchbar">
        <br><br><br>
        <form action="">
            <input type="hidden" name="loggedIn" value="1">
            <input class="textfield" type="text" name="email" placeholder="<?php echo $_SESSION["email"]; ?>" required>
            <br><br>
            <input class="textfield" type="text" name="username" placeholder="<?php echo $_SESSION["username"]; ?>"
                   required>
            <br><br>
            <input class="textfield" type="text" name="password" placeholder="password..." required>
            <br><br><br>
            <div id="accountButtons">
                <input class="submitButton" type="submit" name="submitusername" value="update details">
        </form>
        <br><br>
        <form action="login.php">
            <button id="logOffButton" class="submitButton">Log Out</button>
        </form>
    </div>
    <?php
    if ($_REQUEST['loggedIn'] == 1) {
        $email = $_REQUEST["email"];
        $user = $_REQUEST["username"];
        $pass = $_REQUEST["password"];
        if ($email == $_SESSION["email"]) {
            $updateInfo = "UPDATE user SET
                email = '" . $email . "',username='" . $user . "',password ='" . $pass . "' WHERE userID =" . $_SESSION["userID"];
            $updateResults = $mysql->query($updateInfo);
            if (!$updateResults) {
                echo "DB Query Problem <hr>";
                echo $db->error;
                exit();
            } else {
                echo "<div id='errorMessage' style='color: green'><div id='errorText'> account information updated with <br> email: " . $_REQUEST["email"] . "<br> username: " . $_REQUEST["username"] . "</div></div>";
                $_SESSION['username'] = $user;
                $_SESSION['email'] = $email;
            }
        } else {
            echo "<script>console.log('new email')</script>";
            $emailDupCheck = "SELECT * FROM user WHERE email = '" . $_REQUEST["email"] . "'";
            $dupCheckResults = $mysql->query($emailDupCheck);
            if (!$dupCheckResults) {
                echo "DB Query Problem <hr>";
                echo $db->error;
                exit();
            } else {
                $emailRow = $dupCheckResults->fetch_assoc();
                if ($emailRow["email"] == null) {
                    $updateInfo = "UPDATE user SET
                email = '" . $email . "',username='" . $user . "',password ='" . $pass . "' WHERE userID =" . $_SESSION["userID"];
                    $updateResults = $mysql->query($updateInfo);
                    if (!$updateResults) {
                        echo "DB Query Problem <hr>";
                        echo $db->error;
                        exit();
                    } else {
                        echo "<div id='errorMessage' style='color: green'><div id='errorText'> account information updated with <br> email: " . $_REQUEST["email"] . "<br> username: " . $_REQUEST["username"] . "</div></div>";
                        $_SESSION['username'] = $user;
                        $_SESSION['email'] = $email;
                    }                } else {
                    echo "<div id='errorMessage'><div id='errorText'>account already associated with email: " . $_REQUEST["email"] . "</div></div>";
                }

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