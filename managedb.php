<?php
include(‘header . php’)
?>
<html>
<title>Manage Database</title>
<style>
    *
    {
        margin: 0px;
        padding: 0px;
    }
    #outercontainer{
        background-color: #202020;
        height: 100%;
        font-family: 'Lora';
    }
    #footer{
        background-color: #5B5B5B;
        text-align: center;
        font-family: "Stretch Pro";
        font-size: 12pt;
        height:45px;
        margin-left: -10px;
        margin-bottom: -10px;
        margin-right:-10px;
        color:white;
    }
    .tooltitle{
        margin: auto;
        font-size: 100px ;
        font-family:"Stretch Pro";
        color: white;
        text-align: center;
        padding-top: 3%;
    }
    .tooltitle:hover{
        color: #202020;
    }
    .dbdiv{
        width: 100%;
        height: 16.5%;
        padding: 10px;
        border: white 4px solid;
        margin-top: -10px;

    }
    #option1{
        background-color: #d0d0d0;
    }
    #option1:hover{
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }
    #option2{
        background-color: #9f9f9f;
    }
    #option2:hover{
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }
    #option3{
        background-color: #868686;
    }
    #option3:hover{
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }
    #option4{
        background-color: #565656;
    }
    #option4:hover{
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }
    #option5{
        background-color: #333333;
    }
    #option5:hover{
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }
    #black{
        background-color: black;
        height:50px;
    }
</style>
<body>

<div id="outercontainer">
    <div id="black">
    <?php
    include('header.php');
    $_SESSION["loggedIn"] = false;
    ?>
    </div>
    <a href="WITS-frontpage.php"><div class="dbdiv" id="option1"><div class="tooltitle" style="float: right; margin-right: 40px">MATERIALS</div></div></a>
    <a href="WITS-frontpage.php"> <div class="dbdiv"  id="option2"><div class="tooltitle" style="float: left; margin-left: 40px" >LOCATION</div> </div></a>
    <a href="WITS-frontpage.php"> <div class="dbdiv" id="option3"><div class="tooltitle" style="float: right; margin-right: 40px">T00L TYPE</div></div></a>
    <a href="WITS-frontpage.php"> <div class="dbdiv" id="option4"><div class="tooltitle" style="float: left; margin-left: 40px ">USERSS</div></div></a>
    <a href="WITS-frontpage.php"> <div class="dbdiv"id="option5" ><div class="tooltitle" style="float: right; margin-right: 40px">T00LS</div></div></a>

    <div id="footer">
        this site is powered by the graciousness of cohort 8
    </div>

</div>


</body>
</html>
