<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $product=clean_input($_POST["product"]);
		$user= clean_input($_POST["user"]);
		$quan = clean_input($_POST["quan"]);
        $amount = clean_input($_POST["amount"]);
        $orderid = clean_input($_POST["orderid"]);
		$status=clean_input($_POST["status"]);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mobile";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }
       
        if(isset($_POST['Update'])){
            $stmt = $conn->prepare("UPDATE ordertable set product=?,user = ?,quantity = ?,amount=?,Status=? where order_id = ?");
            $stmt->bind_param("ssidsi", $product,$user,$quan,$amount,$status,$orderid);    
            $stmt->execute();
        } else if (isset($_POST['Delete'])) {
            $stmt = $conn->prepare("DELETE from ordertable where product=? and user = ? and quantity = ? and amount=? and order_id = ? and Status=?");
            $stmt->bind_param("ssidis", $product,$user,$quan,$amount,$orderid,$status);    
            $stmt->execute();
        } else{
            echo 'Something went wrong';
        }
        $conn->close();        
        header("location: http://localhost/SIESPhp_xampp/ModifyTable1.php"); 
    }
    
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>