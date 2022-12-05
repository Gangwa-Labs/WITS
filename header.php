<?php
session_start();
?>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="fogo.ico">
    <style>
        @font-face {
            font-family: 'StretchProBasic';
            src: url("stretch-probasic.otf") format("opentype");
        }@font-face {
            font-family: 'Stretch Pro';
            src: url("StretchPro.otf") format("opentype");
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
            background-color: black;

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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-23X0F923MP"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-23X0F923MP');
</script>
<body>
<img id="logoimage" src="witslogo.png">

<ul id="navList">
    <div id="navbar">
        <?php
        if($_SESSION['typeID'] == 2){
            ?>
            <div class="navItem">
                <li><a href="admin/analytics.php">ANALYTICS</a></li>
            </div>
            <div class="navItem">
                <li><a href="admin/admin_db_nav.php">MANAGE_DATABASE</a></li>
            </div>
            <?php
        }
        ?>
        <div class="navItem">
            <li><a href="WITS-frontpage.php">SEARCH</a></li>
        </div>
        <div class="navItem">
            <li><a href="Results.php">CATALOG</a></li>
        </div>
        <div class="navItem">
            <li><a href="vote.php">VOTE</a></li>
        </div>
        <div class="navItem">
            <li><a href="account-info.php"><?php
                    if ($_SESSION['userID'] != null) {
                        echo "ACCOUNT-". $_SESSION["username"];
                    } else {
                        echo "ACCOUNT";
                    } ?></a></li>
        </div>
        <div class="navItem" style="padding-right: 20px">
            <li><a href="infopage.php">INFO</a></li>
        </div>
    </div>
</ul>

</body>
</html>
