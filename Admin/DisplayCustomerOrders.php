<?php
// Displays Customers on a php page
include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}
// Get Customer records from Customer table
?>


<html>
<head>
  <meta charset="UTF-8">
  <title>Display Customer Orders</title>
  <link href="css/Admin_Homepage.css" rel="stylesheet" type="text/css">
</head>
<header>
<h1>
  <img src="images/MB_Horz_3Clr_whiteLtrs.png" class="imageHeader" alt="KSU Header"/>
</header>
<body>

<!--Insert Customer Order list here -->

<?php 

// SQL querry will be a JOIN between CUSTOMER and ORDER on idCustomer
// Show KSU_ID, Customer_Lname, Customer_Fname, Clothing_Item, Clothing_Size, Clothing_Color, Quantity, Order_Date

?>


  <!--Button to go back to the Admin Homepage-->
  <div class="myDiv">
    <button class="button" id="BackToAdminHomepage" onClick="location.href='index.html'"> Back To Admin Homepage
    </button>
  </div>
</body>
</html>
