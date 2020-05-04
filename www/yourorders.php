<?php
	
	
	if(!isset($_SESSION))
	{
	session_start();

	}
	else{
	echo $_SESSION['id'];	
	echo "<h4>Welcome:".$_SESSION['user']."</h4>";
	
	}
?>

        <?php
            
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mobile";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			echo "<br><br>";
            $sql = "SELECT * from ordertable where user='".$_SESSION['user']."'";
            $result = $conn->query($sql);
			
            if ($result->num_rows > 0) {
				echo "<table  align='center' id='table1' border='1' cellspacing='0' cellpadding='5'>";
				echo "<tr style='background-color:#9932CC;'>";
				
				echo "<th>Order Date</th>";
				
				echo "<th>Product</th>";
				echo "<th>USER</th>";
				echo "<th>Quantity</th>";
				echo "<th>Amount</th>";
				echo "<th>orderid</th>";
				echo "<th>Status</th>";
				echo "</tr>";
                
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
					echo "<td>" .$row["CurrDate"]."</td>";
					echo "<td>" .$row["product"]."</td>";
                    echo "<td>" .$row["user"]."</td>";
                    echo "<td>" .$row["quantity"]. "</td>";
                    echo "<td>" .$row["amount"]. "</td>";
                    echo "<td>" .$row["order_id"]. "</td>";
					echo "<td>" .$row["Status"]. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
	
        ?>        
