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
    <title>3D Printing</title>
    <style>
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

        #outercontainer {
            width: 100%;
            background-image: url("ourgoal1.png");
            height: 100%;
            background-size: 100%;
            background-repeat: no-repeat;
            margin: 0;
            background-color: black;
        }

        #middletext {
            font-family: "StretchProBasic";
            font-size: 80px;
            color: #FFFFFF;
            text-align: center;
            margin: auto;
            padding-top: 20%;
        }

        #footer {
            background-color: #5B5B5B;
            text-align: center;
            font-family: "Stretch Pro";
            font-size: 12pt;
            height: 45px;
            color: white;
            width: 100%;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body style="margin: 0">

<div id="outercontainer">
    <?php
    include('header.php');
    ?>
    <script>
        document.querySelector('#navList').style.display = 'none';
    </script>

    <div id="middletext">
        FORGOT PASSWORD?
        <br>
        <p style="font-size: 15pt; font-family: 'StretchProBasic'">Submit Email for Password Recovery</p>
        <form>
            <input type="hidden" name="emailAttempt" value="1">
            <input class="textfield" type="text" name="email" placeholder=" email..." required>
            <input id="submitButton" type="submit">
        </form>
    </div>
    <?php
    if ($_REQUEST["emailAttempt"] == 1) {
        $passwordSearch = "SELECT * FROM user WHERE email = '" . $_REQUEST["email"] . "'";
        $passwordSearchResults = $mysql->query($passwordSearch);
        if (!$passwordSearchResults) {
            echo "DB Query Problem <hr>";
            echo $db->error;
            exit();
        } else {
            $passwordResult = $passwordSearchResults->fetch_assoc();
            $message = "your password for WITS is: " . $passwordResult["password"];
            $to = $_SESSION["email"];
            $subject = "WITS Password Recovery";
            $from = $_REQUEST["email"];
            $headers = "From: $from";
        mail($to, $subject, $message, $headers);
        }
    }
    ?>

    <div id="footer">
        <br>
        this site is powered by the graciousness of cohort 8
    </div>
</div>
</body>


</html>