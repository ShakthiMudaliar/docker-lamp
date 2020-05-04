
<?php
session_start();
	if($_SESSION['user']=="")
	{
	echo "Hi guest user";
	}
	else{
	}?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type='text/javascript'>
		
		
            function validation(){
                a=document.product.Product_name.value;
				
                if ((document.product.price.value == "") || (isNaN(document.product.price.value))){
                    alert("Price should not be empty and enter only Numeric value")
                    return false;
                }
				
                if ((a =="") || (!isNaN(a) )) {
                    alert("Name should not be empty and use only alphabets")
					return false;
                } 
				
				if (document.Product.pdesc.value==""){
                    alert("Description should not be empty")
                    return false;
				
                }
				
				if (document.product.Quan.value == ""){
                    alert("Quan should not be empty")
                    return false;
                }
                return true;
            }       
        </script>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
 <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
		<style>
		table{
		
		background-color:#E6E6FA;
		border-radius: 25px;
		
		
	}
	.bs{border-radius: 25px;
	}
@media screen and (max-width:600px){
		input[type=submit],tr{
			width:50%;
			
		}table{
		font-size:14px;
		
		}
	
		
				
		}
		
		input[type=submit]{
		width:150px;
		background-color:#9932CC;
	}
		
			h4.ab{
			font-family:serif;
			}
			
			.a{
			
		
			font-family:serif;
			}
			@media (max-width: 600px) {  
                .col1, .col2 {width:100%;
                    font-size:1rem;
					}
					
						
					}
float:l					/*1rem = 16px*/
                
				}
 
                @media screen and (min-width:900px){
                body{
                        font-size:1rem;
                        center:50%
                    }
					table{
				width:50%;}
                }
                .col1{
                    float:left;
                    width:25%
                }
				.col2{
                    float:left;
					height:20%;
                }
			
			</style>

    </head>
    <body background="blurr.jpg" style="width:100%;heigh:100%;">
		<br><br><br><br><br>
		
        <form id='form1' action = "UpdateDeleteuser.php" method="POST">
            
			
		
			<table id='table_form'  align='center' cellspacing='7' cellpadding='7'>
				<tr align='center'><th align='center' class='col2' colspan='2'><h4 align='center' class="ab"><i>My Profile</i></h4></th></tr>
				<tr><th class='col2' colspan='2' align='center'><h4 align='center' class="ab"><i>Edit your profile</i></h4></th></tr>
				<tr>
                    <td class='col1'><b color="aqua"><i class="a">Name:</i></b> </td>  <td class='col2'><input class='bs' type="text" name="Name" id="Name"> </td>
                </tr>
                <tr>
                    <td class='col1'><b color="aqua"><i class="a">E-mail: </i></b></td>  <td class='col2'><input class='bs' type="E-mail" name="EMail" id="EMail" disabled> </td>
                </tr>
                <tr>
                    <td class='col1'><b color="aqua"><i class="a">Address:</i></b> </td>  <td class='col2'> <input class='bs' type='text' id='Address' name='Address'></td>
                </tr>
                <tr>
                    <td class='col1'><b color="aqua"><i class="a">Contact:</i></b> </td> <td class='col2'><input class='bs' type="int" name="Contact" id="Contact"> </td>
                </tr>
                
                <tr>
					<td class='col1'><input class='bs' type="submit" name="Update" value="Update"></td></tr><tr><td class='col1'> <input class='bs' type="Submit" name="Delete" value="Delete" </td>
                </tr>
            </table>
			
        </form>
        
        <?php
            
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mobile";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			echo "<br><br>";
            $sql = "SELECT * from register where Name='".$_SESSION['user']."'";
            $result = $conn->query($sql);
			
            if ($result->num_rows > 0) {
				echo "<table  align='center' id='table1' border='1' cellspacing='0' cellpadding='5'>";
				echo "<tr style='background-color:#9932CC;'>";
				echo "<th>Name</th>";
				echo "<th>EMail</th>";
				echo "<th>Address</th>";
				echo "<th>Contact</th>";
				
				echo "</tr>";
                
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
					echo "<td>" .$row["Name"]."</td>";
                    echo "<td>" .$row["EMail"]."</td>";
                    echo "<td>" .$row["Address"]. "</td>";
                    echo "<td>" .$row["Contact"]. "</td>";
					
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
	
        ?>        
        
        <script type='text/javascript'>
            let table = document.getElementById('table1'), iIndex;
            for(let i = 0; i < table.rows.length; i++){
                table.rows[i].onclick = function() {
                    rIndex = this.rowIndex;
					document.getElementById('Name').value = this.cells[0].innerHTML;
                    document.getElementById('EMail').value = this.cells[1].innerHTML;
                    document.getElementById('Address').value = this.cells[2].innerHTML;
                    document.getElementById('Contact').value = this.cells[3].innerHTML;
                   
                }
            }
        </script>
    </body>
</html>