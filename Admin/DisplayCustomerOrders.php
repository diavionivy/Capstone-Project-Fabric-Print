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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<header>
<h1>
<a href = "index.html"><img src="images/MB_Horz_3Clr_whiteLtrs.png" class="imageHeader" alt="KSU Header"/></a>    Admin Homepage</h1></header>
<body class = "body">
  <h2>Customer Order History:</h2>

<!--Insert Customer Order list here -->

<?php 

// SQL querry will be a JOIN between CUSTOMER and ORDER on idCustomer
// Show KSU_ID, Customer_Lname, Customer_Fname, Clothing_Item, Clothing_Size, Clothing_Color, Quantity, Order_Date

$sql = "SELECT CUSTOMER.KSU_ID, CUSTOMER.Customer_Lname, CUSTOMER.Customer_Fname, ORDERS.Clothing_Item, ORDERS.Clothing_Size, ORDERS.Clothing_Color, ORDERS.Quantity, ORDERS.Order_Date
        FROM CUSTOMER INNER JOIN ORDERS ON CUSTOMER.idCUSTOMER=ORDERS.idCustomer;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "
  <table class='table table-condensed'>
  <tr>
  <th>KSU ID</th>
  <th>Last Name</th>
  <th>First Name</th>
  <th>Clothing Item</th>
  <th>Size</th>
  <th>Color</th>
  <th>Quantity</th>
  <th>Order Date</th>
  </tr>
  ";
 
  while($row = $result->fetch_assoc()) {
    echo "
      <tr>
        <td>$row[KSU_ID]</td>
        <td>$row[Customer_Lname]</td>
        <td>$row[Customer_Fname]</td>
        <td>$row[Clothing_Item]</td>
        <td>$row[Clothing_Size]</td>
        <td>$row[Clothing_Color]</td>
        <td>$row[Quantity]</td>
        <td>$row[Order_Date]</td>
      </tr>
    ";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>


  <!--Button to go back to the Admin Homepage-->
  <div class="myDiv">
    <button class="button" id="BackToAdminHomepage" onClick="location.href='index.html'"> Back To Admin Homepage
    </button>
  </div>
</body>
</html>
