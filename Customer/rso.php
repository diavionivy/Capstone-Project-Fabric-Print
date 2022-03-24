<?php

include 'dbcon.php';



if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

$rso = $_REQUEST['rso'];

echo "<h2> . $rso . </h2>";

$sql_query = "INSERT INTO CUSTOMER (idCUSTOMER,  Customer_Lname, Customer_Fname, KSU_Email,Phone_number,Date_of_request)
VALUES($ksuid,'$lname','$fname','$email',$phone,'$request')";

echo "<pre>Debug: $sql_query</pre>\m";
$result = mysqli_query($conn, $sql_query);


if(mysqli_query($conn,$sql_query))
{
    echo "New Customer Info inserted successfully";
}
else
{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);

?>