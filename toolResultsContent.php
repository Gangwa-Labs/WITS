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
if($_REQUEST["location"] != null ){
    $locationFilterSql = "AND locationID = ". $_REQUEST["location"];
}
if($_REQUEST["material"] != null){
    $materialFilterSql = "AND materialID = ". $_REQUEST["material"];
}
if($_REQUEST["toolType"] != null){
    $toolTypeFilterSql = "AND typeID = ". $_REQUEST["toolType"];
}


$sql = "SELECT * FROM allTools WHERE toolName like '%" . $_REQUEST["search"] . "%'" . $locationFilterSql. $materialFilterSql . $toolTypeFilterSql;
$results = $mysql->query($sql);
if (!$results) {
    echo "DB Query Problem <hr>";
    echo $mysql->error;
    exit();
}
?>
<html>
<head>
    <style>

        /*div {*/
        /*    border: 1px solid red;*/
        /*}*/
        @font-face {
            font-family: 'StretchProBasic';
            src: url("stretch-probasic.otf") format("opentype");
        }@font-face {
            font-family: 'Stretch Pro';
            src: url("StretchPro.otf") format("opentype");
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
            border-radius: 20px;
        }

        .pageButton:hover {
            background-color: #FFCC00;
            color: white;
        }

        #pageSelect a {
            text-decoration: none;
            color: black;
        }

    </style>
</head>
<body>
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
        echo "<a href='toolResultsContent.php?start=" . ($start - 3) .
            $searchstring .
            "'><div class='pageButton'>
                <div><</div>
            </div></a>";
    }
    ?>
    <?php
    if ($end < $results->num_rows) {
        echo "<a href='toolResultsContent.php?start=" . ($start + 3) .
            $searchstring .
            "'><div class='pageButton'>
                <div>></div>
            </div></a>";
    }
    ?>
</div>
</body>
</html>