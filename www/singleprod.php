<?php
session_start();
	if(!isset($_SESSION))
	{
	echo "Hi guest user";
	}
	else{
	}
if ($_SERVER["REQUEST_METHOD"] == "POST") {


 echo"<style>
			@media (max-width: 600px) {  
                .col1, .col2 {width:100%;
                    font-size:0.8rem;
					
					}
				.img-responsive{
					width:auto;
					height:300px;
					min-height:300px;
				}	
					
						
					}
float:l				
                
				}
 
                @media screen and (min-width:900px){
                body{
                        font-size:1.2rem;
                        center:50%
                    }
					table{
				width:50%;}
                }
                .col1{
                    float:left;
                    width:25%
                }
				.col2{
                    float:left;
					height:20%;
					width:25%;
                }
		</style>	";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";

$pID=$_POST['BUY'];
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>";
 echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
 echo " <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>";
 echo " <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) { 
			die("Connection failed: " . mysqli_connect_error());
			}
			

$sql = "SELECT * FROM form where pID='".$pID."'";
$result = $conn->query($sql);
		echo "<div align='center'><div class='container'>";
		echo "<div class='row'>
		<form method='post' action='purchase.php'>";
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				
				echo "<table class='table-responsive'  align='center' cellpadding='0' cellspacing='0' width='300'><tr>";
				echo "<th ><img class='img-responsive' align='center' height=400 src='".$row['pImage']."'></th>";
				echo "<th >".$row['Pdesc']."</th></tr>";
				echo "<tr><td colspan='2' align='center'>";
				}
				;
			  echo "<a href='purchase.php' class='btn btn-primary btn-sm'>Add to Cart</a></td></tr>";
			
		}echo "</form></div></div></div>";        
		$conn->close();
}

?>
