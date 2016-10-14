<button type="button" onclick="loadDoc2()">Tuesday</button>

<!--Tuesday -->
<script>

//Calling in the xml file needed 
function loadDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET", "tuesday.xml", true);
  xhttp.send();
}

//Making the Table
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Room</th><th>9:00</th><th>10:00</th><th>11:00</th><th>12:00</th><th>13:00</th><th>14:00</th><th>15:00</th><th>16:00</th><th>17:00</th><th>18:00</th><th>19:00</th><th>20:00</th><th>21:00</th><th>22:00</th></tr>";
  var x = xmlDoc.getElementsByTagName("class");
 
//Populating the table
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("room")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("nine")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("ten")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("eleven")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("twelve")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("thirteen")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("fourteen")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("fifteen")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("sixteen")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("seventeen")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("eighteen")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("nineteen")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("twenty")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("twentyone")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("twentytwo")[0].childNodes[0].nodeValue +
    "</td><tr>";
  }
  document.getElementById("tues").innerHTML = table;
}

</script>
<!--/Tuesday --> 