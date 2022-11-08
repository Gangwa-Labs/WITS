<php> 
    
    $host = "webdev.iyaclasses.com";
    $userid = "ebird_JimJobBob";
    $userpw = "Treesap3#";
    $db = "ebird_WITS1";


    include '../pdloginvariables.php';

    $mysql = new mysqli(
        $host,
        $userid,
        $userpw,
        $db
    );

    if ($mysql->connect_errno) {
        echo "db connection error : " . $mysql->connect_error;
        exit();

    }
    ?>
<html>
    <head>
        <title>WITS Frontpage</title>
    </head>

<style>
    *
    {
        margin: 0px;
        padding: 0px;
    }

    #outercontainer {
        background-color: #202020;
        height: 2100px;
    }

    #bgimage {
        height: 1194px;
        position: absolute;
        opacity: 80%;
    }

    @font-face {
        font-family: stretch;
        src: url(StretchPro.otf);
    }

    #navbar {
        height: 150px;
        font-family: stretch;
        font-size: 16px;
        color: #F0F0F0;
        position: absolute;
        margin-top: 30px;
        margin-left: 1100px;
        word-spacing: 40px;
    }

    #middletext {
        font-family: stretch;
        font-size: 80px;
        color: #FFCC00;
        position: absolute;
        text-align: center;
        margin-top: 430px;
        margin-left: 300px;
    }

    #logoimage {
        position: absolute;
        width: 250px;
        float: left;
    }

    #searchbar {
        position: absolute;
        margin-left: 500px;
        margin-top: 630px;
    }

    #quote {
        position: absolute;
        color: #F0F0F0;
        font-size: 20px;
        margin-left: 350px;
        text-align: center;
        margin-top: 930px;
    }

    #featuredtools {
        position: absolute;
        margin-top: 1250px;
        text-align: center;
        margin-left: 620px;
        font-family: stretch;
        font-size: 30px;
        color: #F0F0F0;
    }

    #toolimage1 {
        position: absolute;
        margin-top: 1400px;
        margin-left: 200px;
        margin-right: 50px;
        float: left;
        width: 400px;
    }

    #toolimage2 {
        position: absolute;
        margin-top: 1400px;
        margin-left: 700px;
        margin-right: 50px;
        float: left;
        width: 400px;
    }

    #toolimage2 {
        position: absolute;
        margin-top: 1400px;
        margin-right: 50px;
        float: left;
        width: 400px;
    }

    #toolimage3 {
        position: absolute;
        margin-top: 1400px;
        margin-left: 1200;
        margin-right: 50px;
        width: 400px;
        height: 400px;
    }

    #description1 {
        position: absolute;
        margin-top: 1820px;
        color: #F0F0F0;
        margin-left: 200px;
        font-size: 20px;
    }

    #description2 {
        position: absolute;
        margin-top: 1820px;
        color: #F0F0F0;
        margin-left: 700px;
        font-size: 20px;
    }

    #description3 {
        position: absolute;
        margin-top: 1820px;
        color: #F0F0F0;
        margin-left: 1200px;
        font-size: 20px;
    }
</style>

    <body>

    <div id="outercontainer">

        <img id="bgimage" src="makerspace1.png">
        <img id="logoimage" src="witslogo.png">

        <div id="navbar">
            account edit contact catalog search
        </div>

        <div id="middletext">
            WHHAT AREE YOU <br> LOOKINNG FORR?
        </div>

        <form id="searchbar" action = "WITS-results.php">
            <input style =
                   "width: 800px;
                    height: 40px;
                    font-size: 25px;
                    border-radius: 20px;
                    opacity: 80%;"
                   type="text" name="search" placeholder="  search...">
        </form>

        <div id="quote">
            The wealth of tools in the maker spaces are intended to enable undirected creative experimentation, not merely facilitate a specific <br> class project or research. “I think that a program that attracts makers and doers like the Academy must commit to making the act of <br> creation accessible,” said Surovsky. “Having a space to make a mess, explore, and experiment is essential for the pursuit of innovation.” <br>
           <br> <strong>Scroll below to check out our growing catalogue of tools!</strong>
        </div>

        <div id="featuredtools"> FEEATUURED T00LLS</div>

        <img id="toolimage1" src="orbital.jpeg">
        <img id="toolimage2" src="jigsaw.jpeg">
        <img id="toolimage3" src="drill.jpg">

        <div id="description1">
            Tool name: Orbital Sander <br>
            Brand: Dewalt <br>
            Location: The cage <br>
        </div>

        <div id="description2">
            Tool name: Jigsaw <br>
            Brand: Dewalt <br>
            Location: The cage <br>
        </div>

        <div id="description3">
            Tool name: Power Drill <br>
            Brand: Dewalt <br>
            Location: The cage <br>
        </div>

        
    </div>

    </body>




</html>
