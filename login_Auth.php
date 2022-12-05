<?php
session_start();
if ($_SESSION["userID"] == null) {
    ?>
    <html>
    <head>
        <style>
            #outercontainer {
                width: 100%;
                background-image: url("makerspace1.png");
                background-size: 100%;
                background-repeat: no-repeat;
                background-color: black;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            #centeredMsgBox {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                gap: 30px;
            }

            #redirectMsg {
                font-family: "Stretch Pro";
                font-size: 40px;
                color: #FFFFFF;
                text-align: center;
            }


            #portalButton {
                width: 200px;
                height: 75px;
                background-color: #FFCC00;
                font-size: 24pt;
                font-family: "lora";
                color: black;
                border-radius: 38px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
            }
            #portalButton a{
                text-decoration: none;
                color: black;
            }
            #portalButton:hover {
                background-color: white;
            }
            #loginLink{
                text-decoration: none;
            }
        </style>
    </head>
    <body style="margin: 0">
    <script>
        document.querySelector('#navList').style.display = 'none';
        document.querySelector('#logoimage').style.display = 'none';
    </script>
    <div id="outercontainer">
        <div id="centeredMsgBox">
            <div id="redirectMsg">Please Log in to Browse</div>
            <a href="login.php" id="loginLink">
            <div id="portalButton">
               <div>Log In</div>
            </div>
            </a>
        </div>
        <?php
        exit();
        ?>
    </div>
    </body>
    </html>
<?php } ?>
