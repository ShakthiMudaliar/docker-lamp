<?php
    echo "<a href='login.php'>Go back</a>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $Name= clean_input($_POST["Name"]);
        $EMail = clean_input($_POST["EMail"]);
		$Address = clean_input($_POST["Address"]);
		$Contact = clean_input($_POST["Contact"]);
        $Password = clean_input($_POST["Password"]);
        $Type = clean_input($_POST["Type"]);
        
		
		
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = $conn->prepare("INSERT INTO Register(Name,EMail,Address,Password,Type,Contact) VALUES (?,?, ?, ?,?,?)");
        $stmt->bind_param("ssssss",$Name,$EMail,$Address,$Password,$Type,$Contact);    
        $stmt->execute();
        $stmt->close();
		$conn->close();
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM Register where Name='$Name'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			
			echo "<body style='background-color:purple;'>";
			echo "<Fieldset style='width:400;background-color:white;margin:auto;	
					-webkit-border-radius: 20px;-moz-border-radius: 20px;
					border-radius: 20px;'>";
			echo "<table align='center' border='1' cellspacing='0' cellpadding='10' >";
			echo "<tr style='background-color: #ffA500;'>";
			echo "<th>ID</th>";
			echo "<th>Name</th>";
			echo "<th>EMail</th>";
			echo "<th>Address</th>";
			echo "<th>Contact</th>";
			echo "</th>";
			// output data of each row
			while($row = $result->fetch_assoc()){
				echo "<tr style='background-color: white;'>";
				echo "<td>".$row["UserID"]."</td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["EMail"]."</td>";
				echo "<td>".$row["Address"]."</td>";
				echo "<td>".$row["Contact"]."</td>";
				echo "</tr>";
			}echo "</table>";
			echo "</fieldset>";
			echo "</body";
		} else {
			echo "0 results";
		}echo '<a href="login.php">Login page</a>';
		$conn->close();
        echo "<script type='text/javascript'> window.alert('Record Inserted Successfully') </script>";
		header("location: http://localhost/SIESPhp_xampp/Login.php"); 
	}
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

	
?>

