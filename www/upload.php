<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "mobile";
$target_dir = "uploads/";
		$target_file = $target_dir.basename($_FILES["FiletoUpload"]["name"]);
		echo $target_file;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["FiletoUpload"]["tmp_name"]);
		$check1 = $_FILES["FiletoUpload"]["tmp_name"];
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
        
        $stmt = $conn->prepare("INSERT INTO image1 (pImage) VALUES (?)");
        $stmt->bind_param("s",$target_file);    
        $stmt->execute();
        $stmt->close();
		$conn->close();
        
		echo "<script type='text/javascript'> window.alert('Record Inserted Successfully') </script>";
	}?>