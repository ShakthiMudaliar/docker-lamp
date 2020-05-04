<?php
session_start();
echo $_SESSION['id'];


	if($_SESSION['user']=="")
	{
	echo "Hi guest user";
	}
	else{
	echo "<br><h4>Welcome</h4><br>" .$_SESSION['user'];
	echo "<a href='logout.php'>Logout?</a>";
	}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo $_POST['BUY'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";
$CID=$_SESSION['id'];
$pID=$_POST['BUY'];
$OrderDetails=$_SESSION['Address'];
$contact=$_SESSION['Contact'];
$Payment='COD';
$ordate=date('Y-m-d H:i:s');

$Status='Not Delivered';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) { 
			die("Connection failed: " . mysqli_connect_error());
			}
		$stmt = $conn->prepare("INSERT INTO orders(OID,CID,PID,OrderDetails,Contact,Payment,ordate,Status) VALUES (?,?,?, ?, ?,?,?,?)");
        $stmt->bind_param("iiisssss",$OID,$CID,$pID,$OrderDetails,$contact,$Payment,$ordate,$Status);    
        $stmt->execute();
        $stmt->close();
		$conn->close();
		echo "<script>alert('Thanks for using our service');</script>";
		header("location: http://localhost/SIESPhp_xampp/xyz.php");
}?>