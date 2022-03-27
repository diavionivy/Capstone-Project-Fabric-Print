<?php

/*
* Deletes records from PRE_TREATMENT table based on quantity entered in Depleted_Items.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Admin/Depleted_Items.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// Quantity of pre-treatment that Admin entered as depleted
$dep_pre_treatment_quantity = (int)$_REQUEST['dep_pre_treatment_quantity'];

    //  DELELTES one record 
$sql_query = "DELETE FROM PRE_TREATMENT WHERE Date_Received IS NOT NULL order by Date_Received asc LIMIT 1";

echo "$sql_query";

// Deletes the exact quantity entered as depleted using a For loop
for ($x=0;$x<$dep_pre_treatment_quantity;$x++){
    if(mysqli_query($conn,$sql_query)){
        echo "Pre-Treatment depleted successfully";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}


?>