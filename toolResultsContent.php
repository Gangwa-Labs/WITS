<html>
<head>
    <style>

        div {
            border: 1px solid red;
        }
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


\

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
</body>
</html>