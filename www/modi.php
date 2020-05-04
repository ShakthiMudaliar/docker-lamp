<?php
	
	
	if(!isset($_SESSION))
	{
	session_start();
	echo "<br>Hi guest user";
	}
	else{
	echo $_SESSION['id'];	
	echo "<br><br><br>Welcome<br>".$_SESSION['user'];
	
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
  var table="<tr><th>EMAIL</th><th>PHONE</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue +
    "</td><td>" +
	
    x[i].getElementsByTagName("PHONE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
<style>
body, html {
	background-image:url("https://www.noupe.com/wp-content/uploads/2009/10/the-inspiration-gallery.jpg");
	background-color:#ffff66;
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
</style>

<title>Veer Collection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body >

 
<div class="bg responsive"></div>
<nav class="navbar navbar-inverse  navbar-fixed-top">
  <div class="container-fluid ">
    <div class="navbar-header">
	<button type='button'  class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>     
	</button>
      <a class="navbar-brand" href="xyz.php"><img src="veer1.png" height='38'></img></a>
    </div>
	
	<div class='collapse navbar-collapse' id='myNavbar'>
    <ul class="nav navbar-nav">

      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="str1.php">Category</a></li>
      
      <li><a href="Login.php">Admin</a></li>
	  <li>
	  
  <a class="dropdown-toggle" data-toggle="dropdown">Top Brands
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
    
    <li><a href="Android.php?name=Samsung">Samsung</a></li>
    <li><a href="Android.php?name=Motorola">Motorola</a></li>
	<li><a href="Android.php?name=Mi">Mi</a></li>
	
  </ul>
</li><form action="prodnew.php" method="post">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<input type="text" placeholder="Search for products..." name="search" style="padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: auto;
  background: #f1f1f1;">
  <button type="submit" style="float: left;width: auto;padding: 10px;background: #2196F3;color: white;font-size: 24px;border: 1px solid grey;border-left: none;
  cursor: pointer;"><i class="fa fa-search"></i></button>
	  </form>
	  </ul>
<?php
	
	
	if(!isset($_SESSION['id']))
	{
	
	  
	  echo '<ul class="nav navbar-nav navbar-right">';
	  echo '<li><a href="Login.php"><span class="glyphicon glyphicon-log-in "></span>Sign In</a></li>';
	  echo '<li><a href="Register.html"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
		</ul></div>
</div></nav>';

	

	}	
	else{
	
	echo '<ul class="nav navbar-nav navbar-right">';
	echo "<li><a href='logout.php'>Logout?</a></li>";
	
	
		echo"</ul>
</div></nav>";
echo "<br><br><br>Welcome" .$_SESSION['user'];
	}
	
?>

<div class="container" align="center" >
  <h2>Featured Mobiles</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:auto;height:auto;background-color:white">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Iphone X.jpg" class="rounded-circle" alt="Los Angeles" style="height:50%;width:auto;">
      </div>

      <div class="item">
        <img src="Appleiphone6.jpg" class="rounded-circle" alt="Chicago" style="height:50%;width:auto;">
      </div>
    
      <div class="item">
        <img src="Appleiphone8plus.jpg" alt="New york" style="height:50%;width:auto;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<br><br><br><br><br><br><br><br><br>
	
	
	
	
	
	
	
	
	
	
	<div class="container" align="center" >
  <h2>Today's Deals</h2>
	<div id="mycarousel1" class="carousel slide" data-ride="carousel" style="width:auto;height:auto; background-color:white">
	  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="4" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="5"></li>
      <li data-target="#myCarousel1" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="RedmiNote5pro.jpg" alt="Los Angeles" style="height:50%;width:auto;">
      </div>

      <div class="item">
        <img src="OppoF9Pro.jpg" alt="Chicago" style="height:50%;width:auto;">
      </div>
    
      <div class="item">
        <img src="RealMe1.jpg" alt="New york" style="height:50%;width:auto;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






<br><br><br><br><br><br><br><br><br>
<h3><i align ="center">The New Apple series</i></h3>
<style>
      iframe {
       width: 500px; /* It should not be 100% */
       height: 500px:
       margin-left: auto;   /* Automatic margin from left */
       margin-right: auto; /* Automatic margin from right */
      } 
    </style> 
<iframe width="400" height="400" src="https://www.youtube.com/embed/H89Lk28whP4" frameborder="0" align="middle" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<iframe width="400" height="400" src="https://www.youtube.com/embed/3xokKYrHibc" frameborder="0" align="middle" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<br><br><br><br><br><br><br><br><br>
  
  
  
  
<div class="container" style='background-color:black;'>
  <!-- <h3>Inverted Navbar</h3>
  <p>An inverted navbar is black instead of gray.</p> -->
<div class='row' >
	<div class="col-sm-4">
      <h3 style="color:white;">Contact us</h3>
      <p>Eail:</p>
      <p>Shakthi.mudaliar.16@siesgst.ac.in</p>
	  <p>Phone:</p>
      <p>7778884564</p>
    </div>
    <div class="col-sm-4">
      <h3 style="color:white;">social</h3>
      <p>Facebook</p>
      <p>Twitter</p>
	  <p>Google Plus</p>
	  <p>Intagram</p>
    </div>
    <div class="col-sm-4">
      <h3 style="color:white;">Our Registered Address</h3> 
      <p>>>>>>></p>
      <p>Flipkart Internet Private Limited,
Vaishnavi Summit, Ground Floor, 7th Main,
80 Feet Road, 3rd Block,
Koramangala,
Bengaluru - 560034
India
CIN : U51109KA2012PTC066107
Telephone: 1800 208 9898</p>
    </div>
</div>
</div>
  
<div align='center'>	
<button class='btn btn-primary' type="button"  onclick="loadDoc()">GET TO YOUR NEAREST CUSTOMER SERVICE:::</button></div>
<br><br>
<table  align='center' border='0' id="demo"></table>

</body>
</html>
