<?php
header("Location: http://localhost:8080/capstone/Admin/Admin_Homepage.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// Date
$date = date("Y/m/d");
$cartridge_color = $_REQUEST['cartridge_color'];
$cartridge_quantity = $_REQUEST['cartridge_quantity'];

$sql_query_cartridge = "INSERT INTO PRINTER_CARTRIDGE (Color, Date_Received) VALUES ('$cartridge_color', '$date')";

// Adds a new record for every quantity

for ($x=0; $x<$cartridge_quantity; $x++){
    if(mysqli_query($conn,$sql_query_cartridge))
    {
        echo "New cartidge info inserted successfully" . "<br>";
    }
    else
    {   
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }   
}


?>