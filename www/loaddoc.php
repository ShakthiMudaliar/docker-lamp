<?php
?>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET","cd_catalog1.xml",true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<div class='container' style='background-color:black;'><div class='row'><h3 style='color:white;'>Contact Us:</h3>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<div class='col-md-4' style='color:white;'><i><h3 >EMAIL</h3>" +
    x[i].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue +
    "</i><br><i>" +
	"<h3 >PHONE</h3>"+
	x[i].getElementsByTagName("PHONE")[0].childNodes[0].nodeValue +
    "</i><br><i>" +
    "<h3 >ADDRESS</h3>"+
    x[i].getElementsByTagName("ADDRESS")[0].childNodes[0].nodeValue +
    "</i></div>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

<div align='center'>	
<button class='btn btn-primary' type="button"  onclick="loadDoc()">GET TO YOUR NEAREST CUSTOMER SERVICE:::</button></div>
<br><br><div class='container'>
<div class='row'>

<table  align='center' border='0' id="demo"></table>
</div></div>
