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

        #outercontainer {
            height: 100%;
            width: 100%;
            background-image: url("makerspace1.png");
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: black;
        }

        #logintext {
            font-family: "Stretch Pro";
            font-size: 40px;
            color: #FFFFFF;
            text-align: center;
            margin: auto;
            padding-top: 20%;
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
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
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

        #loginbutton {
            border: none;
            width: 200px;
            height: 30px;
            background-color: #FFCC00;
            border-radius: 15px;
            font-family: Lora;
            font-size: 14pt;
            font-weight: bold;
        }

        #loginbutton:hover {
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
    </style>
</head>
<body style="margin: 0">


<div id="outercontainer">

    <?php
    session_destroy();
    include('header.php');
    ?>
    <div id="logintext">
        LOGGIN
        <br><br>

    </div>
    <div id="searchbar">
        <form>
            <input class="textfield" type="text" name="email" placeholder=" email..." required>
            <br><br>
            <input class="textfield" type="text" name="password" placeholder=" password..." required>
            <br><br>
            <input id="loginbutton" type="submit" value="Log In">
        </form>
        <div id="columnholder">
            <a href="create-account.php" target="_new">create an account</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="WITS-frontpage.php" target="_new">forgot password?</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="WITS-frontpage.php" target="_new">admin login</a>
        </div>
        <script>
            document.querySelector('#navList').style.display = 'none';
        </script>
    </div>
    <?php
    if ($_REQUEST["email"] != null && $_REQUEST["password"] != null) {
        $sql = "SELECT * FROM user WHERE email = '" . $_REQUEST["email"] . "' AND password = '" . $_REQUEST["password"] . "'";
        $results = $mysql->query($sql);
        if (!$results) {
            echo "DB Query Problem <hr>";
            echo $db->error;
            exit();
        }
        $currentRow = $results->fetch_assoc();
        if ($currentRow["email"] == $_REQUEST["email"] && $currentRow["password"] == $_REQUEST["password"]) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['userID'] = $currentRow["userID"];
            $_SESSION['username'] = $currentRow["username"];
            echo "<script>
                    document.querySelector('#searchbar').style.display = 'none';
                    document.querySelector('#columnholder').style.display = 'none';
                    document.querySelector('#loginText').innerHTML = 'Find Your Tools <br><br>'
                </script>";
            echo "<a style='text-decoration: none' href='WITS-frontpage.php'><div id='frontPagePortal'><div>WITS?</div></div></a>";
        } else {
            echo "<div id='errorMessage'><div id='errorText'>Incorrect Email or Password</div></div>";
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