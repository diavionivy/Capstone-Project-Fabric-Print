<?php
/*
* Adds records to DISTILLED_WATER table based on quantity entered in Incoming_Inventory.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Admin/Incoming_Inventory.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// Date
$date = date("Y/m/d");
$distilled_water_quantity = $_REQUEST['distilled_water_quantity'];


$sql_query_distilled_water = "INSERT INTO DISTILLED_WATER (Date_Received) VALUES ('$date')";

// Adds a new record for every quantity
for ($x=0; $x<$distilled_water_quantity; $x++){
    if(mysqli_query($conn,$sql_query_distilled_water))
    {
        echo "New Distilled Water Info inserted successfully" . "<br>";
    }
    else
    {   
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }   
}

?>