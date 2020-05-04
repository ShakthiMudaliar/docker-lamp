<?php
session_start();
echo "<script>alert('Logout successful');</script>";

session_destroy();
header("location:http://localhost/SIESPhp_xampp/loginform.html");
?>