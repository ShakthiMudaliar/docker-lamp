<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<style>
		.bd{
			align:center;
		}
		</style>
		<script>
		
		</script>
    </head>
    <body class='bd'>
        
        <?php
            session_start();
            $user_id = $_SESSION['user'];
            echo 'Welcome : ' . $user_id . '<br>';
            
           //Define the products and cost
		   
		   
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
			$products=array();$amounts=array();$Images=array();
			echo "<div align='center' class='row'>";$i=0;
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
					array_push($Images,$row['pImage']);
					array_push($products,$row['Product_Name']); 
					array_push($amounts,$row['Price']);
			}
		  
           

            //Load up session
            if ( !isset($_SESSION["total"]) ) {
                $_SESSION["total"] = 0;
                for ($i=0; $i< count($products); $i++) {
                $_SESSION["qty"][$i] = 0;
                $_SESSION["amounts"][$i] = 0;
                }
            }
            
            //Reset
            if ( isset($_GET['reset']) )
            {
                if ($_GET["reset"] == 'true')
                {
                    unset($_SESSION["qty"]); //The quantity for each product
                    unset($_SESSION["amounts"]); //The amount from each product
                    unset($_SESSION["total"]); //The total cost
                    unset($_SESSION["cart"]); //Which item has been chosen
                }
            }
            
            //Checkout
            if ( isset($_GET['checkout']) )
            {
                if ($_GET["checkout"] == 'true')
                {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "mobile";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $temp = 1;
                    $stmt = $conn->prepare("INSERT INTO orderid (t1) VALUES (?)");
                    $stmt->bind_param("i", $temp);    
                    $stmt->execute();                    
                    $stmt->close();
                    
                    $sql = "SELECT max(id) as id from orderid";
                    $result = $conn->query($sql);
                    $r=$result->fetch_assoc();                    
                    $order_id = $r['id'];
                    $status='NOT DELIVERED';
                    $total = 0;
					$date1=date('Y-m-d H:i:s');
                    foreach ( $_SESSION["cart"] as $i ) {
                        $stmt = $conn->prepare("INSERT INTO ordertable (CurrDate,product, user, quantity, amount, order_id,status) VALUES (?,?, ?, ?, ?, ?,?)");
                        $stmt->bind_param("sssidis",$date1,$products[$_SESSION["cart"][$i]],$_SESSION['user'], $_SESSION["qty"][$i], $_SESSION["amounts"][$i], $order_id,$status);    
                        $stmt->execute();
                        $stmt->close();
                    }
                    $conn->close();
					if(isset($_SESSION)){
				echo "<script>alert('Your order placed successfully please check your orders')</script>";
				header("location: http://localhost/SIESPhp_xampp/bill.php");
				
				}
				else{
					echo "<script>alert('Please login to continue')</script>";
				
					
				}
                }
				
			}
            
            //Add
            if ( isset($_GET["add"]) )
            {
                $i = $_GET["add"];
                $qty = $_SESSION["qty"][$i] + 1;
                $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
                $_SESSION["cart"][$i] = $i;
                $_SESSION["qty"][$i] = $qty;
            }

             //Delete
             if ( isset($_GET["delete"]) )
            {
                $i = $_GET["delete"];
                $qty = $_SESSION["qty"][$i];
                $qty--;
                $_SESSION["qty"][$i] = $qty;
                //remove item if quantity is zero
                if ($qty == 0) {
                    $_SESSION["amounts"][$i] = 0;
                    unset($_SESSION["cart"][$i]);
                }
                else
                {
                    $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
                }
            }
        ?><div align='center'>
        <h2>List of All Products</h2>
		<div class='container'>
		<div class='row'>
        <table   border=0 align='center' cellspacing='0' cellpadding='0' >
            <tr><td>
        <?php
            for ($i=0; $i< count($products); $i++) {
        ?>  
			<div align='center' class='col-md-4 col-lg-3 col-xs-7 col-xl-3'><br>
			<table  border=1><tr><td align='center' ><br>
			<div class="card" style='width:270px;height:400px;'>
			
			<img class="card-img-top" width="150" height="280" src="<?php echo($Images[$i]); ?>">
            <div class="card-body" style='background-color:#D0D0D0';>
			<h4 class='card-title'><?php echo($products[$i]); ?></h4>
            <p>₹<?php echo($amounts[$i]); ?></p>
            <a class="btn btn-primary btn-sm" href="?add=<?php echo($i); ?>">Add to cart</a>
			</div></div></td></tr></table></div>
            
        <?php
            }
        ?></td></tr></table></div></div></div>
        <a href="?reset=true" class='btn btn-success'>Reset Cart</a>
         <a href="?checkout=true" class='btn btn-success'>Checkout</a>
		<div align='center'>
        <?php
            if ( isset($_SESSION["cart"]) ) {
        ?>
            <br/><br/><br/>
            <h2>Cart</h2>
            <table border='1' cellpadding='10'  cellspacing='10' class='table-responsive'>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
        <?php
                $total = 0;
                foreach ( $_SESSION["cart"] as $i ) {
        ?>
                    <tr>
                        <td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
                        <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
                        <td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
                        <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
                    </tr>
        <?php
                    $total = $total + $_SESSION["amounts"][$i];
        }
                    $_SESSION["total"] = $total;
        ?>
                    <tr>
                    <td colspan="7">Total : <?php echo($total); ?></td>
                    </tr>
            </table>
        <?php
            }
        ?></div>
    </body>
</html>