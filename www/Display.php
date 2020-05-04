<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";
$ID="";
$Email="";
$address="";
$name="";

$conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }
function getposts(){
	$posts=array();
	$posts[0]=$_POST['UserID'];
	$posts[1]=$_POST['Name'];
	$posts[2]=$_POST['EMail'];
	$posts[3]=$_POST['Address'];
	return $posts;
}
if(isset($_POST['search'])){
	
// Create connection


$data=getposts();
$sql = "Select * FROM Register where UserID = $data[0]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "id:       Name:<br><br><br>";
    while($row = $result->fetch_assoc()) {
        $ID=$row['UserID'];
		$Email=$row['EMail'];
		$address=$row['Address'];
		$name=$row['Name'];
		echo $row['UserID'];
		$address=$_SESSION['address'];
    }
} else {
    echo "0 results";
}
}
$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type='text/javascript'>
            function validation(){
				a=document.Register.Password.value
				b=document.Register.Confirm_password.value
				x=document.Register.Type.value
				y=Default
			if (document.Register.UserID.value == ""){
                    alert("ID should not be empty")
                    return false;
                }
                if (document.Register.Name.value == ""){
                    alert("Name should not be empty")
                    return false;
                }
                if (document.Register.EMail.value == ""){
                    alert("EMail should not be empty")
                    return false;
                }
				if (document.Register.Address.value == ""){
                    alert("Address should not be empty")
                    return false;
                }
				if (document.Register.Password.value==""){
                    alert("Password Error")
					return false;
                }
				
				if (a != b){
                    alert("Password should not be Different")
                    return false;
                }
				if (x == Default){
                    alert("Type should not be Default")
                    return false;
                }
                return true;
            }       
        </script>
    </head>
    <body>
        <form name='Register' method="post" action="Display.php"  onsubmit="return validation()">
            
            <h1>Create Account:<h1>
               
			<table>
				
				<tr>
                    <td><select name="Type" >
						<option value="Default">TYPE</option>
						<option value="Admin">Admin</option>
						<option value="Customer">Customer</option>
						
					</select></td>
                </tr>
				<tr>
                    <td>UserID: </td> <td><input type="text" name="UserID" value="<?php echo $ID;?> " > </td>
                </tr>
                
                <tr>
                    <td>Name: </td> <td><input type="text" name="Name" value="<?php echo $name;?> "> </td>
                </tr>
                <tr>
                    <td>E-mail: </td> <td><input type="E-Mail" name="EMail" value="<?php echo $Email;?> "> </td>
                </tr>
                <tr>
                    <td>Address: </td> <td><input type="text" name="Address" value="<?php echo $address;?> "> </td>
                </tr>
                
				
                
                
				<tr>                    
                    <td></td>
                    <td><input type="submit" name="Register" value="Register"></td>
					<td><input type="submit" name="Search" value="Find"></td>
                
                </tr>                
            </table>
        </form>
    </body>
</html>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $Name= clean_input($_POST["Name"]);
        $EMail = clean_input($_POST["EMail"]);
		$Address = clean_input($_POST["Address"]);
		$Contact = clean_input($_POST["Contact"]);
        $Password = clean_input($_POST["Password"]);
        $Type = clean_input($_POST["Type"]);
        
		
		
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";





	$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM Register where Name=$Name";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Name</th>";
			echo "<th>EMail</th>";
			echo "<th>Address</th>";
			echo "<th>Contact</th>";
			echo "</th>";
			// output data of each row
			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$row["UserID"]."</td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["EMail"]."</td>";
				echo "<td>".$row["Address"]."</td>";
				echo "<td>".$row["Contact"]."</td>";
				echo "</tr>";
			}echo "</table>";
		} else {
			echo "0 results";
		}
		$conn->close();
}        

