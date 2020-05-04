<?php
    
    $UserID = $Password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $EMail = clean_input($_POST["EMail"]);
        $Password = clean_input($_POST["Password"]);
		$Type= clean_input($_POST["Type"]);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT Password from Register where EMail ='" .$EMail . "' AND Type='".Admin."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $pwd = $row['Password'];
        if (strcmp($pwd, $Password)){
                        
            
            header("location: http://localhost/SIESPhp_xampp/form1.html");
			
			}else{
            header("location: http://localhost/SIESPhp_xampp/Login.html"); 
            echo $pwd . ' ' . $Password;
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