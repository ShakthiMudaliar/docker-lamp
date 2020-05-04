<?php
session_start();
session_destroy();
header("location: http://localhost/SIESPhp_xampp/abc.php");
?>