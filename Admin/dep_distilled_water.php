<?php
/*
* Deletes records from DISTILLED_WATER table based on quantity entered in Depleted_Items.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Admin/Depleted_Items.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// Quantity of distilled water that Admin entered as depleted
$dep_distilled_water_quantity = (int)$_REQUEST['dep_distilled_water_quantity'];

    //  DELELTES one record 
$sql_query = "DELETE FROM DISTILLED_WATER WHERE Date_Received IS NOT NULL order by Date_Received asc LIMIT 1";

echo "$sql_query";

// Deletes the exact quantity entered as depleted using a For loop
for ($x=0;$x<$dep_distilled_water_quantity;$x++){
    if(mysqli_query($conn,$sql_query)){
        echo "Distilled Water depleted successfully";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}




?>