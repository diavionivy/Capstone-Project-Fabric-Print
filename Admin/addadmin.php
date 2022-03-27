<?php
/*
* Adds records to ADMIN table based on information entered in Add_Admin.html
*/

//Keeps user on user's current page after executing php
header("Location: http://localhost:8080/capstone/Admin/Add_Admin.html");

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

$adminlname = $_REQUEST['adminlname'];
$adminfname = $_REQUEST['adminfname'];
$adminksuemail = $_REQUEST['adminksuemail'];
$adminphone = $_REQUEST['adminphone'];


$sql_query_add_admin = "INSERT INTO ADMIN (Admin_Lname, Admin_Fname, Admin_KSU_Email, Phone_number)
                        VALUES ('$adminlname','$adminfname','$adminksuemail','$adminphone')";

if(mysqli_query($conn,$sql_query_add_admin)){
    echo "New Admin user added successfully" . "<br>";
}else{   
    echo "Error: " . $sql . "" . mysqli_error($conn);
}   

?>