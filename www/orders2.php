<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";
echo "<style>
th,td{
	 text-align: left;
    padding: 8px;
	
	
}
table,p,.ab{
			font-size:1.3vw;
			}
</style>
";
$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM orders";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<body style='background-color:#ffff66;'>";
			echo "<Fieldset  style='width:400;background-color:white;margin:auto;	
					-webkit-border-radius: 20px;-moz-border-radius: 20px;
					border-radius: 20px;'>";
					
			echo '<div style="overflow-x:auto;">';
			echo "<table class='table' width='400' border='1' class='table'  cellspacing='0' cellpadding='5'> ";
			echo "<tr style='background-color:orange;'>";
			echo "<th>OrderID</th>";
			echo "<th>CustID</th>";
			echo "<th>ProductID</th>";
			echo "<th>OrderDetails</th>";
			echo "<th>Contact</th>";          
			echo "<th>Payment</th>";
			echo "<th>ordate</th>";
			echo "<th>status</th>";
			echo "</th>";
			// output data of each row
			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$row["OID"]."</td>";
				echo "<td>".$row["CID"]."</td>";
				echo "<td>".$row["PID"]."</td>";
				echo "<td>".$row["OrderDetails"]."</td>";
				echo "<td>".$row["Contact"]."</td>";
				echo "<td>".$row["Payment"]."</td>";
				echo "<td>".$row["ordate"]."</td>";
				echo "<td>".$row["Status"]."</td>";
				echo "</tr>";
			}echo "</div></table>";
			echo "</fieldset>";
		} else {
			echo "0 results";
		}
		$conn->close();
        
?>
