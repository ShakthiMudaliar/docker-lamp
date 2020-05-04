
<?php
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';

$con=mysqli_connect("localhost","root","","mobile");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM form ORDER BY pID";
$result=mysqli_query($con,$sql);
$products=array();
echo "<div align='center' class='row'>";$i=0;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		array_push($products,$row['Product_Name']);
		 echo "<div class='col-sm-4'>";
		echo '<div class="card" style="width:400px;">';
			echo '<div class="card-body">';
			echo '<img class="card-img-top" src="'.$row['pImage'].'" alt="Card image" width="200" height="360">';
			echo"<h4 class'card-title'>".$row['Product_Name']."</h4>";
			echo "<h6 style='color:red;'>$".$row['Price']."</h6>";
			echo "<button type='submit' class='btn btn-primary' name='save'>Add to Cart</button>";
			echo"</div></div></div>";
			echo "</br>"; $i=$i+1;
			}echo "</div>";
			
for($i=0;$i<10;$i=$i+1){
	echo $products[$i]."<br>";
}
?>
		
		

