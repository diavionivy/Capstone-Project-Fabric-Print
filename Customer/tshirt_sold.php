<?php
header("Location: http://localhost:8080/capstone/Customer/Customer_Design.html");
include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

echo "connected successfully!! <br>";


$tshirt_color = $_REQUEST['tshirt_color'];
$tshirt_size = $_REQUEST['tshirt_size'];
$tshirt_quantity = (int)$_REQUEST['tshirt_quantity'];

    //  DELELTES one record 
$sql_query = "DELETE FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = '$tshirt_color' AND Clothing_Size = '$tshirt_size' LIMIT 1";

for ($x=0;$x<$tshirt_quantity;$x++){
    if(mysqli_query($conn,$sql_query)){
        echo "Tshirt deleted successfully";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}




?>