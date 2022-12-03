<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
            width: 500px;
            float: left;
            left: -180px;
            top: -180px;
            z-index: 1;
        }
        #logoimagediv{

        }
    </style>
</head>
<body>

<script>
    $(document).ready(function(){
        $("#logoimagediv").onclick(function(){
            $(this).rotate(90);
        });
    });
</script>

<div id="logoimagediv">
    <img id="logoimage" src="fogo.svg">
</div>

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
