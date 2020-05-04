
<?php
	session_start();
	
	if(!isset($_SESSION['user']))
	{
	
	echo "<br>Hi guest user";
	}
	else{
	
	$address=$_SESSION['Address'];
	
	}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";

$conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

	
// Create connection



$sql = "Select Address FROM register where Name=".$_SESSION['user'];
$result = $conn->query($sql);



$conn->close();
?>



<div align='center'>
<table >
	<tr>
		<td>
			<b>Name:</b>
		</td>
		<td> <?php echo $_SESSION['user'] ?></b>
		</td>
	</tr>
	<tr>
		<td>
			<b>Address:</b>
		</td>
		<td>
			<?php echo $address ?>
		</td>
	</tr>
	
	
</table>
</div>
<div align='center'>
<table border='0' cellpadding='10'  cellspacing='10' class='table-responsive'>
                <tr>
                    
                    
                    
                </tr>
        <?php
                $total = 0;
                foreach ( $_SESSION["cart"] as $i ) {
        ?>           
        <?php
                    $total = $total + $_SESSION["amounts"][$i];
        }
                    $_SESSION["total"] = $total;
        ?>
                    <tr>
                    <td colspan="7" align='center'>Total : ₹<?php echo($total); ?></td>
					</tr><tr><td><h6>Since this is a computer generated bill ,Signature not required</h6></td>
                    </tr>
            </table></div>
			<div align='center'><h4>Thanks for buying!!!</h4></div>