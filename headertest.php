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

        .w3-center {
            position: absolute;
            width: 500px;
            float: left;
            left: -180px;
            top: -180px;
            z-index: 1;
        }
        #rotated {
            position: absolute;
            width: 500px;
            float: left;
            z-index: 1;
        }
    </style>
</head>
<body>


    <div class="w3-center"><img src="fogo.svg" height="500" /></div>

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
<script>
    $(document).ready(function(){
        $(".w3-center").onmouseover(function rotateImage(-90) {
        $(".w3-center").animate({
            transform: -90;
        }, {
            step: function(now, fx) {
                $(this).css({
                    '-webkit-transform': 'rotate(' + now + 'deg)',
                    '-moz-transform': 'rotate(' + now + 'deg)',
                    'transform': 'rotate(' + now + 'deg)'
                });
            }
        });
    }

    });
</script>
</body>
</html>
