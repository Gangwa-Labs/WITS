<?php
include(‘header . php’)
?>
<html>
<title>Manage Database</title>
<style>
    #outercontainer{
        width:100%;
        background-size: 100%;
        background-repeat: no-repeat;
        margin-left: -10px;
        margin-top: -10px;
        padding-right: 20px;
        background-color: white;
        height: 200%;
    }
    #logoimage {
        position: absolute;
        width: 250px;
        float: left;
    }
    #middletext {
        font-family: "Stretch Pro";
        font-size: 80px;
        color: #FFFFFF;
        text-align: center;
        margin: auto;
        padding-top:20%;
    }
    #searchbar{
        margin: auto;
        align-content: center;
        text-align: center;
        padding-bottom: 340px;

    }

    #featuredtools{
        font-family: "Stretch Pro";
        font-size: 30px;
        color: #FFCC00;
        align-content: center;
        text-align: center;
        background-color: black;
        height: 100%;
        margin-left: -10px;
        margin-bottom: -10px;
        margin-right:-10px;
        padding-top:20px;
        padding-bottom: 30px;
    }
    .toolimage {
        font-family: "Lora";
        width: 29%;
        margin:2%;
        text-align: center;
        align-content: center;
        color: #FFFFFF;
        float:left;

    }
    .toolimageimage {
        width: 400px;
        height:500px;
        border-radius: 21px;
        border: #5B5B5B 20px solid;
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
        padding-top: 10%;
    }
    .tooltitle:hover{
        color: #202020;
    }
    .addbutton{
        background-color: #FFCC00;
        color: #202020;
        font-family: Lora;
        font-size: 21px;
        border-radius: 20px;
        text-align: center;
        width: 177px;
        height: 35px;
        font-weight: bolder;
        margin: auto;
        padding-top: 10px;
    }
    .optionbox{
        background-color: #FFCC00;
        color: #202020;
        background-size: 100%;
        font-family: "Stretch Pro";
        height: 150px;
        margin: 20px;
        font-size: 100px;
        padding: 10px;


    }
    .buttonbox{
        background-color:white;
        width: 300px;
        height: 150px;
        float: right;

    }
    .dbdiv{
        background-color: #c5c5c5;
        width: 100%;
        height: 250px;
        padding: 10px;
        border: white 4px solid;


    }
    .dbdiv:hover{
        background-color: #FFCC00;
        color: #202020;
        transition: .3s;
        cursor: pointer;
    }
    #footer {
        font-family: 'Stretch Pro';
        background-color: #5B5B5B;
        width: 100%;
        padding-top:10px;
        position: absolute;
        color: #ffffff;
        text-align: center;
        margin-top: -90px;
        font-size: 10px;
        padding: 2px;

    }


</style>
<body>
<div id="outercontainer">
    <img id="logoimage" src="witslogo.png">
    <div class="dbdiv"><div class="tooltitle" style="float: right; margin-right: 40px">MATERIALS</div></div>
    <div class="dbdiv"  ><div class="tooltitle" style="float: left; margin-left: 40px" >LOCATION</div> </div>
    <div class="dbdiv"><div class="tooltitle" style="float: right; margin-right: 40px">T00L TYPE</div></div>
    <div class="dbdiv" ><div class="tooltitle" style="float: left; margin-left: 40px ">USERSS</div></div>
    <div class="dbdiv"><div class="tooltitle" style="float: right; margin-right: 40px">T00LS</div></div>







</div>
<div id="footer">
    this site is powered by the graciousness of cohort 8
</div>

</body>
</html>
