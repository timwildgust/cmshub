
<html>

<head>
    <title>Year Trackr</title>
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
    
    <body onload="buildTB()">
        <div class="container-fluid">
            <div id='ttBuildBar' class="col-md-12">
                <div class="row">
                    <div class="col-md-1">
                        <input type="text" class="form-control" name="" id="ttClassBox" placeholder="Class" />
                    </div>
                    <div class="col-md-2">
                     
                        <button type="button" class="btn btn-primary" onclick="saveTimeTable();" name="save" id='save'>Save</button>
                    
                    </div>

                </div>
                <style type="text/css">
                    table,
                    th,
                    td {
                        border: .5px solid white;
                        width: 2.8%;
                    }
                    
                    table {
                        width: 100%;
                    }
                </style>
                <div id='ttOutput' class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="mainTable">
                                <!--<tr id="periodRow" >
                            </tr>
                            <tr id="mondayRow">
                            </tr>
                            <tr id="tuesdayRow">
                            </tr>
                            <tr id="wednesdayRow">
                            </tr>
                            <tr id="thursdayRow">
                            </tr>
                            <tr id="fridayRow">
                            </tr>
                            <tr id="saturdayRow">
                            </tr>-->
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>

</html>