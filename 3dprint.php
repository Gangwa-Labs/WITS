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
            font-family: "Stretch Pro";
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
<?php
include('login_Auth.php');
?>
<div id="outercontainer">
    <?php
    include('header.php');
    ?>


    <div id="middletext">
        3D Printing
        <br>
        <p style="font-size: 15pt; font-family: 'StretchProBasic'">Submit your 3D prints to the Maker Space staff to get
            them printed</p>
        <form action="3dprint.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="emailAttempt" value="1">
            <input class="textfield" type="text" name="message" placeholder=" message..." required>
            <input type="file" name="attachment">
            <input id="submitButton" type="submit">
        </form>
    </div>
    <?php
    if ($_REQUEST["emailAttempt"] == 1) {
        if (empty($_FILES["attachment"]["name"])) {
            echo "<div id='errorMessage'><div id='errorText'>File Upload Error</div></div>";
        } else {
            echo  "file was named <strong>" . $_FILES["attachment"]["name"] . "</strong>";
            echo  " file was saved as a temp file at <strong>" .
                $_FILES["attachment"]["tmp_name"] .  "</strong><br><br>";
            $message = $_REQUEST["message"];
            $to = "ezrajbird0@gmail.com";
            $subject = "3D print";
            $from = "me";
            $headers = "From: $from";
            move_uploaded_file($_FILES["attachment"]["tmp_name"], $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/WITS/toolImgs/" . $_FILES["attachment"]["name"]);
            echo $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/WITS/toolImgs/" . $_FILES["attachment"]["name"];
//        mail($to, $subject, $message, $headers);
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