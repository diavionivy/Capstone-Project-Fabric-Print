<?php

#include 'db_connection.php';
include 'db_connect.php';
 
if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

echo "connected successfully";

$ksuid = (int)$_Post['ksuid'];
$fname = $_Post['fname'];
$lname = $_Post['lname'];
$email = $_Post['email'];
$phone = (int)$_Post['phone'];
$request = time();

echo "variables assigned";

$sql_query = "INSERT INTO CUSTOMER (idCUSTOMER, Customer_Lname, Customer_Fname, KSU_Email,Phone_number,Date_of_request)
VALUES($ksuid,'$lname','$fname','$email','$phone','$request')";



if(mysqli_query($conn,$sql_query))
{
    echo "New Customer Info inserted successfully";
}
else
{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);

/*

if(isset($_Post['submit']))
{
    $fname = $_Post['fname'];
    $lname = $_Post['lname'];
    $email = $_Post['email'];
    $phone = $_Post['phone'];
    $request = $_Post['request'];

    echo "variables assigned";

    $sql_query = "INSERT INTO CUSTOMER (Customer_Lname, Customer_Fname, KSU_Email,Phone_number,Date_of_request)
    VALUES('$lname','$fname','$email','$phone','$request')";

    echo "querries ran";




    if(mysqli_query($conn,$sql_query))
    {
        echo "New Customer Info inserted successfully";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
echo "didnt assign variables";

*/

?>