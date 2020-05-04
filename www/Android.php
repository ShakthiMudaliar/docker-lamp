

<?php
session_start();
$user_id = $_GET['name'];
	if(!isset($_SESSION))
	{
	echo "Hi guest user";
	}
	else{
	
	}
	
if($user_id=='Apple')
{
echo "<h2 align='center'>THE TOP APPLE PHONES ARE ALL HERE::::::</h2>";}
if($user_id=='Android')
{
echo "<h2 align='center'>THE TOP ANDROID PHONES ARE ALL HERE::::::</h2>";}
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

		$sql = "SELECT * FROM form where Category='".$user_id."'";
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
			
			$isp_value=$pID;
			echo "<div class='col-md-4  col-xs-3 col-xl-3'>&nbsp;";
			echo "<table border=1 align='center' cellspacing='0' cellpadding='5' >";
			echo "<tr><br>";
			echo "<td><div align='center'>";
			echo "<div class='card-deck'>";
			echo "<div class='card' style='width:240px;height:430px;'>";
			echo "<img class='card-img-top' src='".$row['pImage']."' alt='Card image' style='width:130;height:240'>";
			echo "<div class='card-body' style='background-color:#D0D0D0' style='width:px;height:30px;'>";
			  echo "<h4 class='card-title' color:'blue'><a href='#'>".$row['Product_Name']."</a></h4>";
			  echo "<p class='card-text'>₹".$row['Price']."</p>";
			  
			  echo "<button type='submit' name='BUY' class='btn btn-primary btn-sm' value='".$pID."'>BUY</button>";
			  echo"&nbsp;";
			  echo "<a href='purchase.php' class='btn btn-primary btn-sm'>Add to Cart</a>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div></td></tr></table></div>";
			$session['pID']=$isp_value;
			
			 }
			 echo "</body>";
			 echo "</div>";
			 echo "</div>";
			 
			 
		 }echo "</form></div>";
		 
		 
?>