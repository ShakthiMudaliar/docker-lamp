<?php
    session_start();
    if(isset($_SESSION['user'])){
        header("location: http://localhost/SIESPhp_xampp/xyz.html"); 
    }
    $UserID = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $UserID1 = clean_input($_POST["UserID1"]);
        $Password1 = clean_input($_POST["Password1"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
		if(($UserID1=='Admin@gmail.com')&&($Password1==12345)){
			header("location: http://localhost/SIESPhp_xampp/Admin.html");
		}
		
		else{
        $sql = "SELECT Password,EMail,UserID,Address,Contact,Name from register where EMail ='" .$UserID1 . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $pwd = $row['Password'];
		$Email=$row['EMail'];
		$Name=$row['Name'];
		$UserID=$row['UserID'];
		$Address=$row['Address'];
		$Contact=$row['Contact'];
		echo $pwd;
        if ((strcmp($pwd, $Password1))==0){
            echo 'Login Successful';  
			setcookie('user',$UserID1,time()+60*60*7);
			session_start();			
            $_SESSION['user']= $Name;
			$_SESSION['id']= $UserID;
			$_SESSION['Address']= $Address;
			$_SESSION['Contact']= $Contact;
			
            header("location: http://localhost/SIESPhp_xampp/abc.php"); 
        }else{
            echo "<script>alert('Incorrect Email or Password');</script>";
			header("location: http://localhost/SIESPhp_xampp/Login.php"); 
			
            echo $pwd . ' ' . $Password1;
        }
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