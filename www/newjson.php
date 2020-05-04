<?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mobile";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			
$sql="Select * from form";
$l= array();
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
  $l[] = $row;
}
$j = json_encode($l);
echo $j;
?>