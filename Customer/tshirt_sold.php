<?php
/*
* Deletes t-shirt records from CLOTHING table based on quantity entered in Customer_Design.html

*/


//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Customer/Customer_Design.php");
include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

echo "connected successfully!! <br>";


// Deleting inventory from table
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

// Adding a new record to the ORDERS table
$date = date("Y/m/d");
$customer = $_REQUEST['customer'];


$order_sql = "INSERT INTO ORDERS (Clothing_Item, Clothing_Size, Clothing_Color, Quantity, 
                                    Order_Date, idCustomer)
                VALUES ('T-shirt', '$tshirt_size', '$tshirt_color', '$tshirt_quantity', '$date', $customer)";


if(mysqli_query($conn,$order_sql)){
    echo "Order created successfully";
}
else{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

?>