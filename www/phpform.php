<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pID = clean_input($_POST["pID"]);
        $Product_name= clean_input($_POST["Product_name"]);
		$Category= clean_input($_POST["Category"]);
		$pdesc = clean_input($_POST["pdesc"]);
        $Quan = clean_input($_POST["Quan"]);
        $price = clean_input($_POST["price"]);
		
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";
		$target_dir = "uploads/";
		$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		echo $target_file;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		$check1 = $_FILES["fileToUpload"]["tmp_name"];
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
			move_uploaded_file($check1,$target_file);
    } 	else{
			echo "File is not an image.";
			$uploadOk = 0;
	}
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = $conn->prepare("INSERT INTO form (pImage,Product_name,Category,pdesc,Quan,price) VALUES (?,?,?,?, ?, ?)");
        $stmt->bind_param("ssssdd",$target_file,$Product_name,$Category,$pdesc,$Quan,$price);    
        $stmt->execute();
        $stmt->close();
		$conn->close();
        
		echo "<script type='text/javascript'> window.alert('Record Inserted Successfully') </script>";
		
        header("location: http://localhost/SIESPhp_xampp/display1.php"); 
    }
	
	
	
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

