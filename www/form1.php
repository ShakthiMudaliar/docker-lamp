<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type='text/javascript'>
            function validation(){
                if (document.form.pID.value == ""){
                    alert("E-Mail should not be empty")
                    return false;
                }
                if (document.form.price.value == ""){
                    alert("Website should not be empty")
                    return false;
                }
                if (document.form.Product_name.value == ""){
                    alert("Comment should not be empty")
                    return false;
                }
				if (document.form.fileToUpolad.value == ""){
                    alert("Comment should not be empty")
                    return false;
                }
				if (document.form.pdesc.value == ""){
                    alert("Comment should not be empty")
                    return false;
                }
				if (document.form.Quan.value == ""){
                    alert("Comment should not be empty")
                    return false;
                }
                return true;
            }       
        </script>
    </head>
    <body>
		<br><br><br><br><br><br><br><br>
		<fieldset><u><h1 align='center'>Enter Product Details:</h1></u>
		<div>
        <form name='product' method="post" action="phpform.php"  onSubmit="return validation()" enctype="multipart/form-data">
            <table align='center' cellspacing='7' cellpadding='7'>
                
                <tr>
                    <td><b>Product_name: </b></td> <td><input type="text" name="Product_name" placeholder="Enter Product-Name"> </td>
                </tr>
                <tr>
					<td><b>Upload file: </b></td><td><input type="file" name="fileToUpload" id="fileToUpload"></td>
				</tr>
				<tr>
                    <td><b>Description: </b> </td> <td><input type="text" name="pdesc" placeholder="Enter Product-desc"> </td>
                </tr>
				<tr>
                    <td><b>Quantity: </b></td> <td><input type="text" name="Quan" placeholder="Enter Quantity"> </td>
                </tr>
				<tr>
                    <td><b>price: </b></td> <td><input type="text" name="price" placeholder="Enter Price"> </td>
                </tr>
                <tr>                    
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"> </td>
                </tr>                
            </table>
        </form></div></fieldset>
    </body>
</html>

/* <?php
$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mobile";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM form";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<table>";
			echo "<tr><th>ID</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$row["pID"]."</td>";
				echo "</tr>";
			}echo "</table>";
		} else {
			echo "0 results";
		}
		$conn->close();
?> */