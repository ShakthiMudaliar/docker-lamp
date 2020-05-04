<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=clean_input($_POST['UserID1']);
	$password=clean_input($_POST['Password1']);
	if($name=='abc' && $password=='123')
	{
	$_SESSION['user']=$name;
	echo "The user has been logged in with the name ----" .$_SESSION['user'];
	echo "<input type=submit value='submit' onsubmit=fun()>";
	}
	else{
		echo "<script>alert('Not a valid user')</script>";
		header("loaction:http://localhost/SIESPhp_xampp/loginform.html");
	}
	
}
function clean_input($data){
	$data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
	  
}?><?php
function fun(){
	
session_destroy();
header("location:http://localhost/SIESPhp_xampp/loginform.html");
}?>

