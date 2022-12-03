<?php

$host = "webdev.iyaclasses.com";
$userid = "ebird_JimJobBob";
$userpw = "Treesap3#";
$db = "ebird_WITS1";

$mysql = new mysqli(
    $host,
    $userid,
    $userpw,
    $db
);

if ($mysql->errno) {
    echo "DB Connection Error <br>";
    echo $mysql->connect_error;
    exit();
}
$sql = "SELECT * FROM allTools WHERE toolName like '%" . $_REQUEST["search"] . "%'";
$results = $mysql->query($sql);

if (!$results) {
    echo "DB Query Problem <hr>";
    echo $mysql->error;
    exit();
}
?>
<html>
<head>
    <title>results</title>
    <style>
        #mainContainer {
            background-color: #202020;
            height: 100%;
            margin: 0;
        }

        /*div {*/
        /*    border: 1px solid red;*/
        /*}*/

        #result {
            width: 50%;
            display: flex;
            flex-direction: column;
            height: 1750px;
            float: right;
            padding-right: 75px;
        }

        #searchSide {
            background: linear-gradient(180deg, #5B5B5B 13.53%, rgba(91, 91, 91, 0) 108.48%);
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 20px;
            height: 1500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 30px;
            gap: 30px;
        }


        #resultTitle {
            font-family: 'Stretch Pro';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 20px;
            text-align: center;
            color: #F0F0F0;
        }

        #searchedTool {
            text-align: center;
            font-family: 'Lora';
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
            line-height: 64px;
            color: #FFCC00;

        }


        #filters {
            width: 30%;
            display: flex;
            flex-direction: column;
            height: 720px;
            float: left;
            margin-left: 120px;

        }

        .filterType {
            justify-content: space-evenly;
            flex-flow: row wrap;
            display: flex;
            row-gap: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .filterOption {
            width: 215px;
            height: 55px;
            font-family: 'Lora';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 32px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #F0F0F0;
            background-color: #202020;
            border: 3px solid #F0F0F0;
            filter: drop-shadow(0px 4px 4px #000000);
            border-radius: 15px;

        }

        .toolSearchResult {
            display: flex;
            width: 90%;
            height: 400px;
            flex-direction: column;
        }

        .toolTitle {
            font-family: 'Lora';
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 64px;
            color: #FFFFFF;
        }

        .toolDetails {
            display: flex;
            height: 100%;
            gap: 20px;
            align-items: center;
        }

        .toolPic {
            height: 330px;
            flex: 0 0 280px;
        }

        .toolInfo {
            height: 85%;
            font-family: 'Lora';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 31px;

            color: #FFFFFF;
        }

        .toolInfo p {
            margin: 10px;
        }

        .filterCategory {
            font-family: 'Stretch Pro';
            font-style: normal;
            font-weight: 400;
            font-size: 40px;
            line-height: 40px;

            color: #F0F0F0;
        }

        .filterOption:hover {
            background-color: #FFCC00;
            color: black;
            border-color: #FFCC00;
        }

        #searchContainer {
            width: 45%;
            height: 75px;
            margin: auto;
            margin-bottom: 70px;
            margin-top: 40px;
            display: flex;
            gap: 10px

        }

        #searchBar {
            background-color: rgb(202, 202, 202);
            width: 85%;
            height: 100%;
            border-radius: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #searchButton {
            background-color: #FFCC00;
            width: 15%;
            height: 100%;
            border-radius: 40px;
            border: none;
            background-image: url("search.svg");
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
        }

        #searchForm {
            font-size: 25pt;
            border-radius: 40px;
            opacity: 80%;
            width: inherit;
            height: inherit;
            border: none;
        }

        #searchFormDiv {
            width: 100%;
            height: 100%;

        }

        #pageSelect {
            position: relative;
            display: flex;
            height: 65px;
            gap: 35px;
        }

        .pageButton {
            background-color: white;
            font-size: 25pt;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 65px;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .pageButton:hover {
            background-color: #FFCC00;
            color: white;
        }
        #pageSelect a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body id="mainContainer">
<?php include('header.php') ?>
<form>
    <div id="searchContainer">
        <div id="searchBar">
            <div id="searchFormDiv"><input type="text" id="searchForm" name="search"></div>
        </div>
        <button id="searchButton" type="submit">
        </button>
    </div>
</form>

<div id="result">
    <div id="resultTitle">
        YOUR RESSULTS FFOR...
    </div>
    <div id="searchedTool">
        <?php echo '"' . $_REQUEST['search'] . '"' ?>
    </div>
    <div id="searchSide">
        <?php
        if (empty($_REQUEST["start"])) {
            $start = 1;
        } else {
            $start = $_REQUEST["start"];
        }
        $end = $start + 2;
        if ($results->num_rows < $end) {
            $end = $results->num_rows;
        }
        $counter = $start;
        $results->data_seek($start - 1);
        $searchstring = "&search=" . $_REQUEST["search"];
        while ($currentrow = $results->fetch_assoc()) {
        if ($counter > $end) {
            break;
        }
        echo "<div class ='toolSearchResult'>";
        echo "<div class ='toolTitle'>";
        echo $currentrow["toolName"];
        ?>
    </div>
        <div class="toolDetails">
            <div class="toolPic"></div>
            <div class="toolInfo">
                <?php
                echo "<p>Location: " . $currentrow["location"] . "</p>";
                echo "<p>Tool Type: " . $currentrow["toolType"] . "</p>";
                echo "<p>Material: " . $currentrow["material"] . "</p>";
                echo "<p>Quantity: " . $currentrow["quantity"] . "</p>";
                echo "<p>Description: " . $currentrow["details"] . "</p>";
                ?>
            </div>
        </div>
    </div>

    <?php
    $counter++;
    }
    ?>
<div id="pageSelect">
    <?php
    if ($start != 1) {
        echo "<a href='Results.php?start=" . ($start - 3) .
            $searchstring .
            "'><div class='pageButton'>
                <div><</div>
            </div></a>";
    }
    ?>
    <?php
    if ($end < $results->num_rows) {
        echo "<a href='Results.php?start=" . ($start + 3) .
            $searchstring .
            "'><div class='pageButton'>
                <div>></div>
            </div></a>";
    }
    ?>
</div>
</div>
</div>
</div>
</div>
<div id="filters">
    <form id="filterForm">
    </form>
    <div class="filterCategory">
        I REQUUIRE...

        <div class="filterType">
            <button type="button" class="filterOption" name = "tools" form="filterForm">
                <div>TOOLS</div>
            </button>
            <button type="button" class="filterOption" name="printing">
                <div>PRINTING</div>
            </button>
            <button type="button" class="filterOption" name="materials">
                <div>MATERIALS</div>
            </button>
            <button type="button" class="filterOption" name = "help">
                <div>HELP</div>
            </button>

        </div>

    </div>
    <div class="filterCategory">
        MATEERIAL
        <div class="filterType">
            <div class="filterOption">
                <div>WOOD</div>
            </div>
            <div class="filterOption">
                <div>METAL</div>
            </div>
            <div class="filterOption">
                <div>FABRIC</div>
            </div>
            <div class="filterOption">
                <div>PLASTIC</div>
            </div>
        </div>
    </div>
    <div class="filterCategory">
        LOCATION
        <div class="filterType">
            <div class="filterOption">
                <div>MAIN ROOM</div>
            </div>
            <div class="filterOption">
                <div>CAGE</div>
            </div>
            <div class="filterOption">
                <div>PRINT LAB</div>
            </div>
            <div class="filterOption">
                <div>WOODSHOP</div>
            </div>
        </div>
    </div>
    <div class="FilterCategory" style="margin-top: 50px; text-align: center;">MAP</div>

</div>
</body>
</html>