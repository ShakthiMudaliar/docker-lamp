<?php

$products=simplexml_load_file('product.xml');
if(isset($_GET['action'])){
	$products=simplexml_load_file('product.xml');
foreach($products->product as $product){

   if($product['id']==$_GET['id']){
	unset($product['id']);
	unset($product->name);
   unset($product->price);
   
   
   }
	file_put_contents('product.xml',$products->asXML());
	header("location: http://localhost/SIESPhp_xampp/index12.php");


}}

?><form>
<table border=0 cellspacing=5 cellpadding=6>
<tr>
<th>ID</th>
<th>Name</th>
<th>price</th>
<th colspan='2'>option</th>
</tr><?php
foreach($products->product as $product){?>
<tr>
<td><?php echo $product['id']; ?></td>
<td><?php echo $product->name;?></td>
<td><?php echo $product->price; ?></td>
<?php if($product['id']!=""){?>
<td><a href='edit.php?id=<?php echo $product['id']; ?>'>Edit</a> </td>
<td><a href='index12.php?action=delete&id=<?php echo $product['id']?>'>Delete</a></td>
</tr><?php }}?>

</table>
</form>