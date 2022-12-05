<?php
session_start();
?>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="fogo.ico">
    <style>
        @font-face {
            font-family: 'StretchProBasic';
            src: url("../stretch-probasic.otf") format("opentype");
        }@font-face {
            font-family: 'Stretch Pro';
            src: url("../StretchPro.otf") format("opentype");
        }
        #navbar {
            font-size: 16px;
            color: white;
            width: 100%;
            word-spacing: 40px;
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            padding-top: 20px;
        }

        #navList {
            list-style-type: none;
            margin: 0;
        }

        .navItem {
            font-family: 'StretchProBasic';
        }

        .navItem:hover {
            color: #FFCC00;

        }

        .navItem a {
            color: inherit;
            text-decoration: none;

        }

        #logoimage {
            position: absolute;
            width: 250px;
            float: left;
            top: 0;
            z-index: 1;
        }

    </style>
</head>
<body>
<img id="logoimage" src="../witslogo.png">

<ul id="navList">
    <div id="navbar">
        <div class="navItem">
            <li><a href="../WITS-frontpage.php">SEARCH</a></li>
        </div>
        <div class="navItem">
            <li><a href="../Results.php">CATALOG</a></li>
        </div>
        <div class="navItem">
            <li><a href="../3dprint.php">3D-PRINT</a></li>
        </div>
        <div class="navItem">
            <li><a href="../account-info.php"><?php
                    if ($_SESSION['userID'] != null) {
                        echo "ACCOUNT-". $_SESSION["username"];
                    } else {
                        echo "ACCOUNT";
                    } ?></a></li>
        </div>
        <div class="navItem" style="padding-right: 20px">
            <li><a href="../infopage.php">INFO</a></li>
        </div>
    </div>
</ul>

</body>
</html>
