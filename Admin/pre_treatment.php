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
$pre_treatment_quantity = $_REQUEST['pre_treatment_quantity'];


$sql_query_pre_treatment = "INSERT INTO PRE_TREATMENT (Date_Received) VALUES ('$date')";

// Adds a new record for every quantity
for ($x=0; $x<$pre_treatment_quantity; $x++){
    if(mysqli_query($conn,$sql_query_pre_treatment))
    {
        echo "New Pre-treatment Info inserted successfully" . "<br>";
    }
    else
    {   
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }   
}

?>