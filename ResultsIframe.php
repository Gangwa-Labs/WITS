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
$toolObj = array();
while ($currentrow = $results->fetch_assoc()) {
    $tool = array(
        "toolName" => $currentrow["toolName"],
        "toolID" => $currentrow["toolID"],
        "location" => $currentrow["location"],
        "toolType" => $currentrow["toolType"],
        "material" => $currentrow["material"],
        "quantity" => $currentrow["quantity"],
        "details" => $currentrow["details"]
    );
    $toolObj[] = $tool;
}
$JSONTools = json_encode($toolObj);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    var jsonResult = <?php echo $JSONTools ?>;
    console.log(jsonResult);
</script>
<html>
<head>
    <title>results</title>
    <style>
        @font-face {
            font-family: 'StretchProBasic';
            src: url("stretch-probasic.otf") format("opentype");
        }@font-face {
            font-family: 'Stretch Pro';
            src: url("StretchPro.otf") format("opentype");
        }
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
            font-size: 20px;
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

        .filterOption:hover {
            background-color: #FFCC00;
            color: black;
            border-color: #FFCC00;
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


        #searchContainer {
            width: 45%;
            height: 50px;
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
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #searchButton {
            background-color: #FFCC00;
            width: 15%;
            height: 100%;
            border-radius: 25px;
            border: none;
            background-image: url("search.svg");
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
        }

        #searchButton:hover {
            background-color: white;
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
        #resultsIframe{
            width: 50%;
            height: 1750px;
            float:right;
            padding-right: 75px;
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
<iframe id="resultsIframe" title="results"> </iframe>
<div id="result">
    <div id="resultTitle">
        YOUR RESSULTS FFOR...
    </div>
    <div id="searchedTool">
        <?php echo '"' . $_REQUEST['search'] . '"' ?>
    </div>
    <div id="searchSide">
        <script>
            for (let i = 0; i < jsonResult.length; i++) {

            }
        </script>
        <div class='toolSearchResult'>
            <div id="tool0" class='toolTitle'></div>
            <div class="toolDetails">
                <div class="toolPic"></div>
                <div id="tool0info" class="toolInfo">
                    <p>Location: </p>
                    <p>Tool Type:</p>
                    <p>Material:</p>
                    <p>Quantity:</p>
                    <p>Details:</p>
                </div>
            </div>
        </div>
        <div class='toolSearchResult'>
            <div id="tool1" class='toolTitle'></div>
            <div class="toolDetails">
                <div class="toolPic"></div>
                <div id="tool1info" class="toolInfo">
                    <p>Location: </p>
                    <p>Tool Type:</p>
                    <p>Material:</p>
                    <p>Quantity:</p>
                    <p>Details:</p>
                </div>
            </div>
        </div>
        <div class='toolSearchResult'>
            <div id="tool2" class='toolTitle'></div>
            <div class="toolDetails">
                <div class="toolPic"></div>
                <div id="tool2info" class="toolInfo">
                    <p>Location: </p>
                    <p>Tool Type:</p>
                    <p>Material:</p>
                    <p>Quantity:</p>
                    <p>Details:</p>
                </div>
            </div>
        </div>
        <div id="pageSelect">
            <div class='pageButton'>
                <div><</div>
            </div>
            <div class='pageButton'>
                <div>></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    function toolFill(toolCounter, searchLimit, initalCount) {
        for (toolCounter; toolCounter != searchLimit; toolCounter++) {
            if (initalCount + 3 == toolCounter) {
                return (toolCounter);
            }
            $("#tool" + toolCounter).html(jsonResult[toolCounter].toolName);
            let compliedInfo =
                "<p>Location: "+jsonResult[toolCounter].location+"</p>" +
                "<p>Tool Type: "+jsonResult[toolCounter].toolType+"</p>" +
                "<p>Material: "+jsonResult[toolCounter].material+"</p>" +
                "<p>Quantity: "+jsonResult[toolCounter].quantity+"</p>" +
                "<p>Details: "+jsonResult[toolCounter].details+"</p>"
            $("#tool" + toolCounter + "info").html(compliedInfo)
        }
        return (toolCounter);
    }

    console.log(toolFill(0, jsonResult.length, 0));
</script>
<div id="filters">
    <form id="filterForm">
    </form>
    <div class="filterCategory">
        I REQUUIRE...

        <div class="filterType">
            <button type="button" class="filterOption" name="tools" form="filterForm">
                <div>TOOLS</div>
            </button>
            <button type="button" class="filterOption" name="printing">
                <div>PRINTING</div>
            </button>
            <button type="button" class="filterOption" name="materials">
                <div>MATERIALS</div>
            </button>
            <button type="button" class="filterOption" name="help">
                <div>HELP</div>
            </button>
        </div>
    </div>
    <div class="filterCategory">
        MATEERIAL
        <div class="filterType">
            <?php
            $material = "SELECT * FROM material";
            $materialResults = $mysql->query($material);
            if (!$materialResults) {
                echo "DB Query Problem <hr>";
                echo $mysql->error;
                exit();
            }
            while ($currentrow = $materialResults->fetch_assoc()) {
                echo "<div data-filter-name = '" . $currentrow["material"] . "' data-filter-opt = 'material' data-id= " . $currentrow["materialID"] . " class='filterOption'>
                <div>" . strtoupper($currentrow["material"]) . "</div></div>";
            }
            ?>
        </div>
    </div>
    <div class="filterCategory">
        LOCATION
        <div class="filterType">
            <?php
            $location = "SELECT * FROM location";
            $locationResults = $mysql->query($location);
            if (!$locationResults) {
                echo "DB Query Problem <hr>";
                echo $mysql->error;
                exit();
            }
            while ($currentrow = $locationResults->fetch_assoc()) {
                echo "<div data-filter-name = '" . $currentrow["location"] . "' data-filter-opt = 'location' data-id = " . $currentrow['locationID'] . " class='filterOption'>
                <div>" . strtoupper($currentrow["location"]) . "</div></div>";
            }
            ?>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".filterOption").on("click", function () {
                let filterTable = this.dataset.filterOpt;
                let filterID = this.dataset.id;
                let filterName = this.dataset.filterName;
                console.log(filterTable + " " + filterID + " " + filterName);
                if (filterTable == "material") {
                    for (var i = 0; i < jsonResult.length; i++) {
                        if (jsonResult[i].material == filterName) {
                            console.log(jsonResult[i]);
                        }
                    }
                }
                if (filterTable == "location") {
                    for (var i = 0; i < jsonResult.length; i++) {
                        if (jsonResult[i].location == filterName) {
                            console.log(jsonResult[i]);
                        }
                    }
                }
            });
        });
    </script>
    <div class="FilterCategory" style="margin-top: 50px; text-align: center;">MAP</div>
</div>
</body>
</html>