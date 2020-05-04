<?php
	
	
	if(!isset($_SESSION))
	{
	session_start();
	echo "<br>Hi guest user";
	}
	else{
	echo $_SESSION['user'];	
	echo "<h4>Welcome:".$_SESSION['user']."</h4>";
	
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

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
  var table="<div class='container' style='background-color:black;'><div class='row'>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<div class='col-md-4' style='color:white;'><h3 style='color:white;'>E-Mail</h3><p><br><br>" +
    x[i].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue +
    "</p><br></div>" +
	"<div class='col-md-4' style='color:white;'><h3 style='color:white;'>Contact Us</h3><p><br><br>+91-"+
	x[i].getElementsByTagName("PHONE")[0].childNodes[0].nodeValue +
    "</p><br></div>" +
    "<div class='col-md-4' style='color:white;'><h3 style='color:white;'>Our Registered Address</h3><p><br><br>"+
    x[i].getElementsByTagName("ADDRESS")[0].childNodes[0].nodeValue +
    "</p></div>";
  }"</div></div>";
  document.getElementById("demo").innerHTML = table;
}
</script>
<style>
body, html {
   

	font-size:2vw;
    
}
h3,p{
color:white;
font-size:10;
}
.bg {
    
	
	
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
} 
.footer{
	position:fixed;
	left:0;
	bottom:0;
	width:100%;
	backgroundcolor:white;
	color:white;
	text-align:center;
	
}
</style>

<title>Veer Collection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background-color='#ffff66'>

 
<div class="bg responsive"></div>
<nav class="navbar navbar-inverse  navbar-fixed-top">
  <div class="container-fluid ">
    <div class="navbar-header">
	<button type='button'  class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>     
	</button>
      <a class="navbar-brand" href="abc.php"><img src="veer1.png" height='38'></img></a>
    </div>
	<div class='collapse navbar-collapse' id='myNavbar'>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="map.html" style='display:block;' name='test' target='test'>About</a></li>
      <li><a href="str1.php" style='display:block;' name='test' target='test'>Top brands</a></li>
      
      <li><a href="Login.php" >Admin</a></li>
	  <li>
  <a class="dropdown-toggle" data-toggle="dropdown">Category
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
    
    <li><a href="Android.php?name=Apple" style='display:block;' name='test' target='test'>Apple</a></li>
    <li><a href="Android.php?name=Android" style='display:block;' name='test' target='test'>Android</a></li>
  </ul>
</li>
<form action="prodnew.php" style='display:block;' name='test' target='test' method="post">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<input type="text"  placeholder="Search for products..." name="search" style="padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: auto;
  background: #f1f1f1;" >
  <button type="submit"  style="float: left;width: auto;padding: 10px;background: #2196F3;color: white;font-size: 24px;border: 1px solid grey;border-left: none;
  cursor: pointer;"><i class="fa fa-search"></i></button>
	  </form>
	 
	  </ul>
<?php
	
	
	if(!isset($_SESSION['user']))
	{
	
	  
	  echo '<ul class="nav navbar-nav navbar-right">';
	  echo '<li><a href="Login.php"><span class="glyphicon glyphicon-log-in "></span>Login</a></li>';
	  echo '<li><a href="Register.html" ><span class="glyphicon glyphicon-user"></span>Register</a></li>
		</ul></div>
</div></nav>';

	

	}	
	else{echo '<li><ul class="nav navbar-nav navbar-right">';
	echo '<a class="dropdown-toggle" data-toggle="dropdown">Your Account
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="logout.php" >Logout?</a></li>
    <li><a href="yourorders.php" style="display:block;" name="test" target="test">Your Orders</a></li>
	<li><a href="ModifyTable2.php" >Edit your profile</a></li>
  </ul></ul></li>';
	echo"
</div></nav>";
echo "<br><br><br>Welcome" .$_SESSION['user'];
	}
	
?>
<br><br><br><br><br>

<iframe name='test' frameBorder=0 src="str1.php" width='100%' height='100%'></iframe>
  
<div class=''>  
<div align='center'>	
<button class='btn btn-primary' type="button"  onclick="loadDoc()">GET TO YOUR NEAREST CUSTOMER SERVICE:::</button></div>
<br><br><div class='container'>
<div class='row'>
-
<table  align='center' border='0' id="demo"></table>
</div></div></div>
</body>
</html>




