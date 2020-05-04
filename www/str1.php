


<title>Veer Collection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<div class="container" align="center" >
  <h2>Smartphones Mobiles</h2>  
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
        <img src="Iphone X.jpg"  alt="Los Angeles" style="height:50%;width:auto;">
      </div>

      <div class="item">
        <img src="Appleiphone6.jpg"  alt="Chicago" style="height:50%;width:auto;">
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

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>";
 echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
 echo " <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>";
 echo " <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>";
$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "SELECT * FROM form";
		$result = $conn->query($sql);
		
		echo "<div align='center'>";
		echo"<form method='post' action='singleprod.php'>";

		if ($result->num_rows > 0) {
			echo "<div class='container' >";
			echo "<div class='row'>";
			echo "<body>";
			$i=0;
			
		 while($row = $result->fetch_assoc()){
			$pID=$row['pID'];
			$_SESSION['pID']=$pID;
			$isp_value=$pID;
			echo "<div class='col-md-4  col-xs-4 col-xl-3'>&nbsp;";
			echo "<table border=1 cellspacing='0' cellpadding='5' style='background-color:#ffff99';>";
			echo "<tr ><br>";
			echo "<td><div align='center'>";
			echo "<div class='card-deck' >";
			echo "<div class='card' style='width:270px;height:400px;' >";
			echo "<img class='card-img-top' src='".$row['pImage']."' alt='Card image' style='width:150;height:280'>";
			echo "<div class='card-body' style='background-color:#D0D0D0';>";
			  echo "<h4 class='card-title' color:'blue'><a href='#'>".$row['Product_Name']."</a></h4>";
			  echo "<p class='card-text'>₹".$row['Price']."</p>";
			  
			  echo "<button class='btn btn-primary' name='BUY' value='".$pID."'>Info</button>";
			  echo " ";
			  echo "<a href='purchase.php' class='btn btn-primary'>Add to Cart</a>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div></td></tr></table></div>";
			
			
			 }
			 echo "</body></div>";
			 echo "</div>";
			 
			 
		 }echo "</form></div>";
		 
		 
		 
		 
		 /*
			let buttonClass = document.getElementByClass('classNname');
			buttoon.click(function(event){
				buttonId = this.getAtrribute('id');
			})
		 */
		 
		 
		 
		 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Synchronous Loading</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
	<div align='center'>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15076.615642785237!2d72.994824!3d19.144739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1791b3c993881e9!2sVeer+Collection!5e0!3m2!1sen!2sin!4v1540433418866" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
  </body>
</html>