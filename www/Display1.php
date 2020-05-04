<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";

$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM form";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<body style='background-color:#ffff66;'>";
			echo "<Fieldset style='width:400;background-color:white;margin:auto;	
					-webkit-border-radius: 20px;-moz-border-radius: 20px;
					border-radius: 20px;'>";
			echo "<table border='1'  cellspacing='0' cellpadding='5'> ";
			echo "<tr style='background-color:orange;'>";
			echo "<th>Image</th>";
			echo "<th>ID</th>";
			echo "<th>Name</th>";
			echo "<th>Category</th>";
			echo "<th>Description</th>";
			echo "<th>Qunatity</th>";
			echo "<th>price</th>";
			echo "</th>";
			// output data of each row
			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td><img width='200' src='".$row["pImage"]."'></td>";
				echo "<td>".$row["pID"]."</td>";
				echo "<td>".$row["Product_Name"]."</td>";
				echo "<td>".$row["Category"]."</td>";
				echo "<td>".$row["Pdesc"]."</td>";
				echo "<td>".$row["Quan"]."</td>";
				echo "<td>".$row["Price"]."</td>";
				echo "</tr>";
			}echo "</table>";
			echo "</fieldset>";
		} else {
			echo "0 results";
		}
		$conn->close();
        
?>
