<?php
/*
* Adds records to TEFLON table based on quantity entered in Incoming_Inventory.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Admin/Incoming_Items.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

echo "connected successfully";

// Date
$date = date("Y/m/d");
$teflon_quantity = $_REQUEST['teflon_quantity'];
echo "$date";
echo $teflon_quantity;

$sql_query_teflon = "INSERT INTO TEFLON (Date_Received) VALUES ('$date')";

// Adds a new record for every quantity
for ($x=0; $x<$teflon_quantity; $x++){
    if(mysqli_query($conn,$sql_query_teflon))
    {
        echo "New Teflon Info inserted successfully";
    }
    else
    {   
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }   
}




?>