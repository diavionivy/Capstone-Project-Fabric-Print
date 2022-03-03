<?php
$conn=mysql_connect("hostname","username","password");
mysql_select_db("databasename",$conn);

// Run the query.
$result = $conn->query("SELECT * FROM table LIMIT 10");

// Get the result in to a more usable format.
$query = array();
while($query[] = mysqli_fetch_assoc($result));
array_pop($query);

// Output a dynamic table of the results with column headings.
echo '<table border="1">';
echo '<tr>';
foreach($query[0] as $key => $value) {
    echo '<td>';
    echo $key;
    echo '</td>';
}
echo '</tr>';
foreach($query as $row) {
    echo '<tr>';
    foreach($row as $column) {
        echo '<td>';
        echo $column;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>\

<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="css/Admin_Homepage.css" rel="stylesheet" type="text/css">
</head>
<header>
  <h1>This is the Inventory Homepage</h1>
</header>

<body>
	<div class="myDiv">
<table align="left">
  <tr>
    <th>Item</th>
    <th>S</th>
    <th>M</th>
    <th>L</th>
    <th>XL</th>
    <th>Needs Pre-Treatment?</th>
  </tr>
  <tr>
    <td>T-shirt (White)</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>No</td>
  </tr>
  <tr>
    <td>T-shirt (Grey)</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>Yes</td>
  </tr>
  <tr>
    <td>T-shirt (Black)</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>Yes</td>
  </tr>
  <tr>
    <td>Sweatshirt (White)</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>No</td>
  </tr>
  <tr>
    <td>Sweatshirt (Grey)</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>Yes</td>
  </tr>
  <tr>
    <td>Sweatshirt (Black)</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    <td>Yes</td>
  </tr>
</table>

</body>
</html>

