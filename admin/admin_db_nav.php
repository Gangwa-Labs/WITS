<?php
include(‘header . php’)
?>
<html>
<title>Manage Database</title>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    #outercontainer {
        background-color: #202020;
        height: 100%;
        font-family: 'Lora';
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
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tooltitle {
        margin: auto;
        font-size: 100px;
        font-family: "Stretch Pro";
        color: white;
        text-align: center;
        height: 100%;
        padding-top: 10px;;
    }

    .tooltitle:hover {
        color: #202020;
    }

    .dbdiv {
        width: 100%;
        padding: 10px;
        display: flex;
        align-items: center;
        border: none;
        height: 20%;
    }
    .dbdiv:hover *{
        color: #202020;
        transition: .3s;

    }

    #option1 {
        background-color: #d0d0d0;
    }

    #option1:hover {
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }

    #option2 {
        background-color: #9f9f9f;
    }

    #option2:hover {
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }

    #option3 {
        background-color: #868686;
    }

    #option3:hover {
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }

    #option4 {
        background-color: #565656;
    }

    #option4:hover {
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }

    #option5 {
        background-color: #333333;
    }

    #option5:hover {
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }

    #black {
        background-color: black;
        height: 50px;
    }
    #flexNav{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 91%;
        flex-direction: column;
    }
</style>
<body>

<div id="outercontainer">
    <div id="black">
        <?php
        include('admin_header.php');
        ?>
    </div>
    <div id="flexNav">
            <button class="dbdiv" id="option1">
                <div class="tooltitle" style="float: right; margin-right: 40px">MATERIALS</div>
            </button>
            <button class="dbdiv" id="option2">
                <div class="tooltitle" style="float: left; margin-left: 40px">LOCATION</div>
            </button>
            <button class="dbdiv" id="option3">
                <div class="tooltitle" style="float: right; margin-right: 40px">T00L TYPE</div>
            </button>
            <button class="dbdiv" id="option4">
                <div class="tooltitle" style="float: left; margin-left: 40px ">USERSS</div>
            </button>
            <button class="dbdiv" id="option5">
                <div class="tooltitle" style="float: right; margin-right: 40px">T00LS</div>
            </button>
    </div>
    <div id="footer">
        <div>        this site is powered by the graciousness of cohort 8
        </div>
    </div>

</div>


</body>
</html>
