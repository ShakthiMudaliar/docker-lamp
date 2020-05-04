<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
session_start();
$servername = "db";
$username = "user";
$password = "test";
$dbname = "mobile";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) { 
			die("Connection failed: " . mysqli_connect_error());
			}
if(isset($_POST("buy"))){
	if(isset($_SESSION("Shopping_cart"))){
	
		$item_array_id=array_column($_SESSION["Shopping_cart"],"pID")
		if(!in_array($_GET,$item_array_id))
		{
			$count=count($_SESSION["Shopping_cart"]);
			$item_array=array(
			
			'item_id' => $_POST["pID"],
			'item_name' => $_POST["Product_Name"],
			'item_quan' => $_GET["Quan"],
			'item_price' => $_GET["price"],
			);
			$_SESSION["shopping_cart"][0]=$item_array;
			
		}
		else{
		echo '<scipt>alert("Item Already Added")</script>';
		echo '<scipt>window.location="shoppingcart.php"</script>';
		}
	}
	else{
		$item_array=array(
			
			'item_id' => $_POST["pID"],
			'item_name' => $_POST["Product_Name"],
			'item_quan' => $_GET["Quan"],
			'item_price' => $_GET["price"],
			);
			$_SESSION["shopping_cart"][0]=$item_array;	
	    }
		

if(isset($_POST["Action"]))
{
	if($_POST["Action"]=='delete'){
		foreach($_SESSION['shopping_cart'][$keys]);
		{
			if($values['item_id']==$_POST['pID']){
				unset($_SESSION['shopping_cart'][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.alert.location="shoppingcart.php"</script>'
			}
		}
	}
}}
?>
<html>
<head></head>
<body>
<table class='table-bordered'>
<tr>
<th>Item Name</th>
<th>Image</th>
<th>Quantity</th>
<th>Price</th>
<th>Action</th>
<?php
if(!empty($_SESSION['shopping_cart']))
{ $total=0;
	foreach($_SESSION['shopping_cart'] as $keys => $values))
	{
?>
<tr>
<td><?php echo $values["item_name"]; ?></td>
<td><?php echo $values["item_quan"]; ?></td>
<td><?php echo $values["item_price"]; ?></td>
<td><?php echo number_format($values["item_quan"]* $values["item_price"]; ?></td>
</tr>
<?php

$total=$total+($values["item_quan"]*$values["item_price"]);
?>
</body>
</html>
