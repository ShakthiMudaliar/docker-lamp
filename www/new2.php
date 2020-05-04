<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "mobile";

$proid = "";
$proname = "";
$prodesc = "";
$proq = "";
$propri = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['proid'];
    $posts[1] = $_POST['proname'];
    $posts[2] = $_POST['prodesc'];
    $posts[3] = $_POST['proq'];
    $posts[4] = $_POST['propri'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM form WHERE pID = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $proidid = $row['pID'];
                $proname = $row['Product_Name'];
                $prodesc = $row['pdesc'];
                $proq = $row['Quan'];
				$propri = $row['price'];
				
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `form`(`Product_Name`, `pdesc`, `Quan`,`price`) VALUES ('$data[1]','$data[2]',$data[3]),$data[4]";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `form` WHERE `pID` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `form` SET `Product_Name`='$data[1]',`pdesc`='$data[2]',`Quan`=$data[3],`Price`=$data[4] WHERE `pID` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>

<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
    <body>
        <form action="new2.php" method="post">
            <input type="number" name="proid" placeholder="Id" value="<?php echo $proid;?>"><br><br>
            <input type="text" name="proname" placeholder="First Name" value="<?php echo $proname;?>"><br><br>
            <input type="text" name="prodesc" placeholder="Enter description" value="<?php echo $prodesc;?>"><br><br>
            <input type="Number" name="proq" placeholder="Enter Quantity" value="<?php echo $proq;?>"><br><br>
			<input type="Number" name="propri" placeholder="Enter price" value="<?php echo $propri;?>"><br><br>
            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="Find">
            </div>
        </form>
    </body>
</html>
