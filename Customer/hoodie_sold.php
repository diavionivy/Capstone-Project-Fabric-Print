<?php
/*
* Deletes sweatshirt records from CLOTHING table based on quantity entered in Customer_Design.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Customer/Customer_Design.html");
include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

echo "connected successfully!! <br>";


$hoodie_color = $_REQUEST['hoodie_color'];
$hoodie_size = $_REQUEST['hoodie_size'];
$hoodie_quantity = (int)$_REQUEST['hoodie_quantity'];

    //  DELELTES one record 
$sql_query = "DELETE FROM CLOTHING WHERE Clothing_Item = 'Sweatshirt' AND Clothing_Color = '$hoodie_color' AND Clothing_Size = '$hoodie_size' LIMIT 1";

for ($x=0;$x<$hoodie_quantity;$x++){
    if(mysqli_query($conn,$sql_query)){
        echo "Sweatshirt deleted successfully";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}




?>