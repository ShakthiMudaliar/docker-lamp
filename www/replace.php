<script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <?php
 $xml = new DOMDocument('1.0', 'utf-8');
 $xml->formatOutput = true; 
 $xml->preserveWhiteSpace = false;
 $xml->load('cd_catalog1.xml');

 //Get item Element
 $element = $xml->getElementsByTagName('CD')->item(0);  

 //Load child elements
 $name = $element->getElementsByTagName('EMAIL')->item(0);
 $comment = $element->getElementsByTagName('PHONE')->item(0) ;
 
 $address = $element->getElementsByTagName('ADDRESS')->item(0);

 //Replace old elements with new
 $element->replaceChild($name, $name);
 $element->replaceChild($comment, $comment);
 $element->replaceChild($address, $address);
 
 ?>

 <?php
 if (isset($_POST['submit']))
 {
$name->nodeValue = $_POST['namanya'];
$comment->nodeValue = $_POST['commentnya'];
$address->nodeValue = $_POST['Value1'];

htmlentities($xml->save('cd_catalog1.xml'));

 }

 ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
 
		<style>

			.Ca,{
				border-radius: 25px;
				
				
			}
			table,p,.field,h1.ca{
			
			border-radius: 25px;
			 }
	
			  input[type=submit]{
			  color:white;
			  width:50%;
			  }
			  table{
		
		background-color:#D0D0D0;
		
		
	}
	
	
	input[type=submit]{
	width:100%;height:auto;
	}
	table{
		width:20%;
	}
td{
align:center;}
	@media screen and (max-width:600px){
		
		table,field{
		font-size:16px;
		
		
		}
		
		}
		
		@media (max-width: 600px) {  
                .col1, .col2 {width:100%;
                    font-size:1.4rem;}
float:l					/*1rem = 16px*/
                }
 
                @media screen and (min-width:900px){
                body{
                        font-size:1.4rem;
                        center:50%
                    }
                }
                .col1{
                    float:left;
                    width:25%
                }
                .col2{
                    float:left;
					height:40%;
					} 
	


		</style>
 
 <html><head>
 
 <style>
 td{
	padding:10px; 
 }
 </style>
 </head><body background='blurr.jpg'>
 <form method="POST" action=''><br><br><br><br><br><br><br>
 <table align='center' cellspacing='10' cellpadding='5'>
 <tr>
	<td class='col1'><b class='field'>EMAIL </b></td>
	<td class='col2'><input type="text-name" value="<?php echo $name->nodeValue  ?>" name="namanya" /></td>
</tr>
<tr>
	<td class='col1'><b class='field'>PHONE</b></td>  
	<td class='col2'><input type="text-comment" value="<?php echo $comment->nodeValue  ?>"  name="commentnya"/></td>
</tr>
<tr>
	<td class='col1'><b class='field'>Address</b> </td> 
	<td class='col2'><input type="text-address" value="<?php echo $address->nodeValue  ?>"  name="Value1"/></td>
</tr>
<tr align='center'><td colspan=2><input class='btn btn-success' align='center' name="submit" type="submit" ></td>
</tr></table></body>
 </form>
