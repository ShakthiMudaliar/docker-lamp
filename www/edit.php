<?php
$products=simplexml_load_file('product.xml');
if(isset($_POST['submit'])){
	
foreach($products->product as $product){

   if($product['id']==$_POST['id']){
	$product->name=$_POST['name'];
    $product->price=$_POST['price'];}}
	file_put_contents('product.xml',$products->asXML());
	header("location: http://localhost/SIESPhp_xampp/index12.php");

}
foreach($products->product as $product){
if($product['id']==$_GET['id']){
   $id=$product['id'];
	$name=$product->name;
	$price=$product->price;
break;
	}  
 }
 
?><form method='post'>
<table>
<tr>
<td>ID
</td>
<td><input type='text' name='id' value=<?php echo $id; ?>>
</td>
<td>Name
</td>
<td><input type='text' name='name' value=<?php echo $name; ?>>
</td>
<td>price
</td>
<td><input type='text' name='price' value=<?php echo $price; ?>>
<td><input type='submit' name='submit' value='submit'><td>
</td>
</tr>
</table></form>