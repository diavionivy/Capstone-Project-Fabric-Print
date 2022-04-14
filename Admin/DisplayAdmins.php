<?php
// Displays Admins on a php page
include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Display Admins</title>
  <link href="css/Admin_Homepage.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<header>
<h1>
<a href = "index.html"><img src="images/MB_Horz_3Clr_whiteLtrs.png" class="imageHeader" alt="KSU Header"/></a>    Admin Homepage</h1></header>
<body class = "body">

<h1> Admin List </h1>
</body>
</html>

<!--Insert Admin List Here-->
<?php
// Get Admin records from Admin table
$sql = "SELECT Admin_Lname, Admin_Fname, Admin_KSU_Email, Phone_number FROM ADMIN";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "
  <table class = 'table table-condensed center'>
  <tr>
  <th>Last Name</th>
  <th>First Name</th>
  <th>KSU Email</th>
  <th>Phone Number</th>
  </tr>
  ";
 
  while($row = $result->fetch_assoc()) {
    echo "
      <tr>
        <td>$row[Admin_Lname]</td>
        <td>$row[Admin_Fname]</td>
        <td>$row[Admin_KSU_Email]</td>
        <td>$row[Phone_number]</td>
      </tr>
    ";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>


<!--Button to go back to the Admin Homepage-->
<html>
  <body>
<div class="myDiv">
    <button class="button" id="BackToAdminHomepage" onClick="location.href='index.html'"> Back To Admin Homepage
    </button>
  </div>
</body>
</html>

