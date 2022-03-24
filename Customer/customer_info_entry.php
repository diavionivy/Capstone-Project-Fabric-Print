<?php

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

echo "connected successfully!!";

$ksuid = (int)$_REQUEST['ksuid'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$phone = (int)$_REQUEST['phone'];
$request = $_REQUEST['request'];
$rso = $_REQUEST['rso'];

$sql_query_customer_info = "INSERT INTO CUSTOMER (idCUSTOMER,  Customer_Lname, Customer_Fname, KSU_Email,Phone_number,Date_of_request)
VALUES($ksuid,'$lname','$fname','$email',$phone,'$request')";

if(mysqli_query($conn,$sql_query_customer_info))
{
    echo "New Customer Info inserted successfully";
}
else
{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

$sql_query_rso = "INSERT INTO RSO()";

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