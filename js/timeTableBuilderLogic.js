function buildTT() {
    //redundent time table building function
    //no longer in use
    var moduleText = document.getElementById('ttModuleBox').value;
    var classText = document.getElementById('ttClassBox').value;
    var roomText = document.getElementById('ttRoomBox').value;
    var startPeriodText = document.getElementById('ttStartBox').value;
    var lenghtText = document.getElementById('ttLenghtBox').value;
    var dayText = document.getElementById('ttDayBox').value.toLowerCase();

    var days = new Array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday");
    var bool = false;

    for (var i = 0; i < days.length; i++) {
        if (dayText == days[i]) {
            bool = true;
        }
    }

    if (bool == true) {
        var day = dayText + "Row";
        var row = document.getElementById(day);
        var period = startPeriodText - 1;
        var cell = row.cells.namedItem(period.toString());
        cell.colSpan = lenghtText;
        for (var i = 0; i < lenghtText; i++) {
            row.deleteCell(-1);
        }
        cell.innerHTML = moduleText + "</br>" + classText + "</br>" + roomText;
    }
    else {
        alert("Please enter valid day");
    }


}

function buildTB() {
    //builds time table on load
    var dayCells = new Array();
    var tableMain = document.getElementById("mainTable");
    var l = 8.5;
    var fullPart;
    var periodRow = new Array();

    var days = new Array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    for (var i = 0; i < 17; i++) {

        var j = i.toString();

        periodRow[i] = tableMain.insertRow(i);
        periodRow[i].id = j;
        for (var k = 0; k < 7; k++) {
            dayCells[k] = periodRow[i].insertCell(-1);

        }
        periodRow[0].cells[0].innerHTML = "";
        periodRow[i].cells[0].innerHTML = l;
        l = l + .5;
        for (var m = 1; m < 7; m++) {
            periodRow[i].cells[m].innerHTML = "<textarea name='tArea" + i + m + "' style='color: white; background-color: transparent; border: none;'/>";

        }

    }
    for (var i = 1; i < 7; i++) {
        periodRow[0].cells[i].innerHTML = days[i - 1];

    }



}


function getTimeTables() {
    //retrieves timetable from json file
    document.getElementById("mainTable").innerHTML = "";
    var found;
    var classN = document.getElementById("ttclass").value;
    var ind = 0;
    $.getJSON('../js/timeTables.json')
        .done(function(data) {
            var myList = data;
            var snapshot = Defiant.getSnapshot(data);
            var u = 0;
            found = JSON.search(snapshot, '//' + classN);
            var dayCells = new Array();
            var tableMain = document.getElementById("mainTable");
            var l = 8.5;
            var fullPart;
            var periodRow = new Array();
            var days = new Array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            for (var i = 0; i < 17; i++) {

                var j = i.toString();

                periodRow[i] = tableMain.insertRow(i);
                periodRow[i].id = j;
                for (var k = 0; k < 7; k++) {
                    dayCells[k] = periodRow[i].insertCell(-1);

                }
                periodRow[0].cells[0].innerHTML = "";
                periodRow[i].cells[0].innerHTML = l;
                l = l + .5;

            }
            
            for (var i = 1; i < 17; i++) {
                for (var m = 1; m < 7; m++) {
                    periodRow[i].cells[m].innerHTML = found[ind].replace(/([A-Z])/g, ' $1').trim();
                    ind++;

                }
            }
            
            for (var i = 1; i < 7; i++) {
                periodRow[0].cells[i].innerHTML = days[i - 1];
            }

        document.getElementById("mainTable").setAttribute("align", "center");
        });
}

function saveTimeTable() {
    //sends time table content to php file for saving

    var timeTableArray = [];
    var clas = document.getElementById('ttClassBox').value;
    
    $("textarea").each(function() {
        timeTableArray.push(this.value);
    });
    var timeTableData = JSON.stringify(timeTableArray);
    var dataToSend = {
        clas,
        timeTableData
    };
    $.post("../js/jsonEditLoad.php", dataToSend);
  
}





