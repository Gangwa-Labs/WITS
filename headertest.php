<html>
<head>
    <style>
        body{
            background-color: black;
        }
        #navbar {
            font-family: "Stretch Pro";
            font-size: 16px;
            color: white;
            width: 100%;
            word-spacing: 40px;
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            padding-top: 20px;
            float: top;
        }

        #navList {
            list-style-type: none;
            margin: 0;
        }

        .navItem {
        }

        .navItem:hover {
            color: #FFCC00;
            transition: 1s;
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
<img id="logoimage" src="witslogo.png">

<ul id="navList">
    <div id="navbar">
        <div class="navItem" >
            <li><a href="WITS-frontpage.php">SEARCH</a></li>
        </div>
        <div class="navItem">
            <li><a href="Results.php">CATALOG</a></li>
        </div>
        <div class="navItem">
            <li><a href="account-info.php">ACCOUNT</a></li>
        </div>
        <div class="navItem" style="padding-right: 20px">
            <li><a href="infopage.php">INFO</a></li>
        </div>
    </div>
</ul>

</body>
</html>
