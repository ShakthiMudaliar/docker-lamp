<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $pID=clean_input($_POST["pID"]);
		$Product_name= clean_input($_POST["Product_name"]);
		$pdesc = clean_input($_POST["pdesc"]);
        $Quan = clean_input($_POST["Quan"]);
        $price = clean_input($_POST["Price"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }
        
        if(isset($_POST['Update'])) {
            $stmt = $conn->prepare("UPDATE form set Product_Name=?,Pdesc = ?,Quan = ?,Price=? where pID = ?");
            $stmt->bind_param("ssidi", $Product_name,$pdesc,$Quan,$price,$pID);    
            $stmt->execute();
        } else if (isset($_POST['Delete'])) {
            $stmt = $conn->prepare("DELETE from form where pID = ?");
            $stmt->bind_param("i", $pID);    
            $stmt->execute();
        } else{
            echo 'Something went wrong';
        }
        $conn->close();        
        header("location: http://localhost/SIESPhp_xampp/ModifyTable.php"); 
    }
    
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>