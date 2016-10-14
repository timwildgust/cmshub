<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script type="text/javascript" src="/js/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/js/defiant.js"></script>
    <script type="text/javascript" src="/js/timeTables.json"></script>
    <script type="text/javascript" src="/js/timeTableBuilderLogic.js"></script>
</head>

<body>
    <div class="col-md-12" align="center">
        <input class="col-md-4" type="text" id="ttclass" class="form-control" />
        <button id="ttbutton" onclick="getTimeTables();" class="btn btn-primary">Load</button>
        <div id='ttOutput' class="col-md-12" align="center">
            <div class="row">
                <div class="col-md-6">
                    <table id="mainTable">
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>