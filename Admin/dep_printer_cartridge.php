<?php
/*
* Deletes records from PRINTER_CARTRIDGE table based on quantity entered in Depleted_Items.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Admin/Depleted_Items.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// Color of ink that Admin entered as depleted
$dep_cartridge_color = $_REQUEST['dep_cartridge_color'];
// Quantity of ink that Admin entered as depleted
$dep_cartridge_quantity = (int)$_REQUEST['dep_cartridge_quantity'];

    //  DELELTES one record 
$sql_query = "DELETE FROM PRINTER_CARTRIDGE WHERE Color = '$dep_cartridge_color' LIMIT 1";

echo "$sql_query";

// Deletes the exact quantity entered as depleted using a For loop
for ($x=0;$x<$dep_cartridge_quantity;$x++){
    if(mysqli_query($conn,$sql_query)){
        echo "Ink Cartridge successfully";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}




?>