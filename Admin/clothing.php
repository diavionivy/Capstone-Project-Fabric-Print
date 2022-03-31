<?php
/*
* Adds records to CLOTHING table based on quantity entered in Incoming_Inventory.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Admin/Incoming_Items.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// Date
$date = date("Y/m/d");
$item = $_REQUEST['item'];
$clothing_quantity = $_REQUEST['clothing_quantity'];
$clothing_color = $_REQUEST['clothing_color'];
$clothing_size = $_REQUEST['clothing_size'];

$sql_query_clothing = "INSERT INTO CLOTHING (Clothing_Item, Clothing_Color, Clothing_Size, Date_Received) VALUES ('$item', '$clothing_color','$clothing_size','$date')";

// Adds a new record for every quantity


for ($x=0; $x<$clothing_quantity; $x++){
    if(mysqli_query($conn,$sql_query_clothing))
    {
        echo "New clothing info inserted successfully" . "<br>";
    }
    else
    {   
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }   
}


?>