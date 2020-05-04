<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        $EMail = clean_input($_POST["EMail"]);
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
		if(isset($_POST['Login'])){
		$sql = "SELECT * FROM Register WHERE EMail='$EMail' and Password='$Password' and Type='$Type'";
		$result = $conn->query($sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: http://localhost/SIESPhp_xampp/form1.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }}
	
	function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>