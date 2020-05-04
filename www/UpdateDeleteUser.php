
<?php
session_start();
	if($_SESSION['user']=="")
	{
	echo "Hi guest user";
	}
	else{
	}
	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $Name=clean_input($_POST["Name"]);
		
		$Address = clean_input($_POST["Address"]);
        $Contact = clean_input($_POST["Contact"]);
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }
       
        if(isset($_POST['Update'])){
            $stmt = $conn->prepare("UPDATE Register set Name=?,Address = ?,Contact=? where EMail=?");
            $stmt->bind_param("ssss", $Name,$Address,$Contact,$_SESSION['user']);    
            $stmt->execute();
			header("location: http://localhost/SIESPhp_xampp/ModifyTable2.php"); 
        }else if (isset($_POST['Delete'])) {
            $stmt = $conn->prepare("DELETE from Register where EMail=?");
            $stmt->bind_param("s",$_SESSION['user']);    
            $stmt->execute();
			header("location: http://localhost/SIESPhp_xampp/Logout.php");
        } 
		else{
            echo 'Something went wrong';
        }
        $conn->close();        
        
    }
    
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>