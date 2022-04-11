<?php
/*
* Adds customer info to CUSTOMER table based on info entered in Customer_Info.html
*/

//Keeps user on user's current page after executing php
include 'dbcon.php';
header("Location: http://localhost:8080/capstone/Customer/Customer_Info.html");


if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

echo "connected successfully!! <br>";

$ksuid = $_REQUEST['ksuid'];
$lname = $_REQUEST['lname'];
$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$date = date("Y/m/d");


$sql_query_customer_info = "INSERT INTO CUSTOMER (KSU_ID, Customer_Lname, Customer_Fname, KSU_Email, Phone_number, Date_Created)
VALUES('$ksuid','$lname','$fname','$email','$phone','$date')";

echo "$sql_query_customer_info";

if(mysqli_query($conn,$sql_query_customer_info))
{
    echo "New Customer Info inserted successfully";
}
else
{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}


mysqli_close($conn);


?>