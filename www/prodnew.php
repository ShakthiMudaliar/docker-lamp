

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $abc=$_POST["search"];
}
session_start();
	if(!$_SESSION)
	{
	echo "Hi guest user";
	}
	else{
	
	
	}
	echo "<br><br>";
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
	$abc=
		$sql = "SELECT * FROM form where Product_name LIKE '%".$abc."%'";
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
			echo "<div class='col-md-4  col-xs-3 col-xl-3'>&nbsp;";
			echo "<table border=1 cellspacing='0' cellpadding='5' style='background-color:#ffff99';>";
			echo "<tr><br>";
			echo "<td><div align='center'>";
			echo "<div class='card-deck'>";
			echo "<div class='card' style='width:270px;height:450px;'>";
			echo "<img class='card-img-top' src='".$row['pImage']."' alt='Card image' style='width:150;height:280'>";
			echo "<div class='card-body'>";
			  echo "<h4 class='card-title' color:'blue'><a href='#'>".$row['Product_Name']."</a></h4>";
			  echo "<p class='card-text'>₹".$row['Price']."</p>";
			  
			  echo "<button class='btn btn-primary' name='BUY' value='".$pID."'>BUY</button>";
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