<?php
/*
* PHP file that displays current inventory levels
*/

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// Getting the Counts for the following...
// Teflon
$teflon_sql = "SELECT * FROM TEFLON";
$teflon_result=mysqli_query($conn,$teflon_sql);
$teflon_count=mysqli_num_rows($teflon_result);

// Distilled Water
$distilled_sql = "SELECT * FROM DISTILLED_WATER";
$distilled_result=mysqli_query($conn,$distilled_sql);
$distilled_count=mysqli_num_rows($distilled_result);

// Black Ink
$black_sql = "SELECT * FROM PRINTER_CARTRIDGE WHERE Color = 'Black'";
$black_result=mysqli_query($conn,$black_sql);
$black_count=mysqli_num_rows($black_result);

// Cyan Ink
$cyan_sql = "SELECT * FROM PRINTER_CARTRIDGE WHERE Color = 'Cyan'";
$cyan_result=mysqli_query($conn,$cyan_sql);
$cyan_count=mysqli_num_rows($cyan_result);

// Magenta Ink
$magenta_sql = "SELECT * FROM PRINTER_CARTRIDGE WHERE Color = 'Magenta'";
$magenta_result=mysqli_query($conn,$magenta_sql);
$magenta_count=mysqli_num_rows($magenta_result);

// Yellow Ink
$yellow_sql = "SELECT * FROM PRINTER_CARTRIDGE WHERE Color = 'Yellow'";
$yellow_result=mysqli_query($conn,$yellow_sql);
$yellow_count=mysqli_num_rows($yellow_result);

// White Ink
$white_sql = "SELECT * FROM PRINTER_CARTRIDGE WHERE Color = 'White'";
$white_result=mysqli_query($conn,$white_sql);
$white_count=mysqli_num_rows($white_result);

// T-Shirt (White) XS
$white_shirt_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'XS'";
$white_shirt_xs_result=mysqli_query($conn,$white_shirt_xs);
$white_shirt_xs_count=mysqli_num_rows($white_shirt_xs_result);

// T-shirt (White) S
$white_shirt_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'S'";
$white_shirt_s_result=mysqli_query($conn,$white_shirt_s);
$white_shirt_s_count=mysqli_num_rows($white_shirt_s_result);

// T-shirt (White) M
$white_shirt_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'M'";
$white_shirt_m_result=mysqli_query($conn,$white_shirt_m);
$white_shirt_m_count=mysqli_num_rows($white_shirt_m_result);

// T-shirt (White) L
$white_shirt_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'L'";
$white_shirt_l_result=mysqli_query($conn,$white_shirt_l);
$white_shirt_l_count=mysqli_num_rows($white_shirt_l_result);

// T-shirt (White) XL
$white_shirt_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'XL'";
$white_shirt_xl_result=mysqli_query($conn,$white_shirt_xl);
$white_shirt_xl_count=mysqli_num_rows($white_shirt_xl_result);

// T-shirt (Grey) XS

// T-shirt (Grey) S

// T-shirt (Grey) M

// T-shirt (Grey) L

// T-shirt (Grey) XL

// T-shirt (Black) XS

// T-shirt (Black) S

// T-shirt (Black) M

// T-shirt (Black) L

// T-shirt (Black) XL

// Sweatshirt (White) XS

// Sweatshirt (White) S

// Sweatshirt (White) M

// Sweatshirt (White) L

// Sweatshirt (White) XL

// Sweatshirt (Grey) XS

// Sweatshirt (Grey) S

// Sweatshirt (Grey) M

// Sweatshirt (Grey) L

// Sweatshirt (Grey) XL

// Sweatshirt (Black) XS

// Sweatshirt (Black) S

// Sweatshirt (Black) M

// Sweatshirt (Black) L

// Sweatshirt (Black) XL
?>




<html>

<head>
  <meta charset="UTF-8">
  <title>Current Inventory</title>
  <link href="css/Admin_Homepage.css" rel="stylesheet" type="text/css">
</head>
<header>
  <h1>This is the Current Inventory</h1>
</header>

<!-- TODO: Make this page display current inventory levels-->
<!--Displays the Current Inventory levels -->
<body>
  <div class="myDiv">

    <!--Clothing Items-->
    <table align="left">
      <tr>
        <th>Item</th>
        <th>XS</th>
        <th>S</th>
        <th>M</th>
        <th>L</th>
        <th>XL</th>
        <th>Needs Pre-Treatment?</th>
      </tr>
      <tr>
        <td>T-shirt (White)</td>
        <td><?php echo $white_shirt_xs_count ?></td><!--XS-->
        <td><?php echo $white_shirt_s_count ?></td><!--S-->
        <td><?php echo $white_shirt_m_count ?></td><!--M-->
        <td><?php echo $white_shirt_l_count ?></td><!--L-->
        <td><?php echo $white_shirt_xl_count ?></td><!--XL-->
        <td>No</td>
      </tr>
      <tr>
        <td>T-shirt (Grey)</td>
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>Yes</td>
      </tr>
      <tr>
        <td>T-shirt (Black)</td>
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>Yes</td>
      </tr>
      <tr>
        <td>Sweatshirt (White)</td>
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>No</td>
      </tr>
      <tr>
        <td>Sweatshirt (Grey)</td>
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>Yes</td>
      </tr>
      <tr>
        <td>Sweatshirt (Black)</td>
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>#</td><!--Add count here-->
        <td>Yes</td>
      </tr>
    </table>
    <!--Ink Cartridges-->
    <table>
      <tr>
        <th>Ink Cartridges</th>
        <th>Quantity Available</th>
      </tr>
      <tr>
        <td>Black</td>
        <td><?php echo $black_count ?></td><!--Black Ink Count-->
      </tr>
      <tr>
        <td>Cyan</td>
        <td><?php echo $cyan_count ?></td><!--Cyan Ink Count-->
      </tr>
      <tr>
        <td>Magenta</td>
        <td><?php echo $magenta_count ?></td><!--Magenta Ink Count-->
      </tr>
      <tr>
        <td>Yellow</td>
        <td><?php echo $yellow_count ?></td><!--Yellow Ink Count-->
      </tr>
      <tr>
        <td>White</td>
        <td><?php echo $white_count ?></td><!--White Ink Count-->
      </tr>
    </table>
    <br>
  </div>
  <div class="myDiv">

    <!--Teflon-->
    <table align="left" width="368">
      <tr>
        <th>Teflon</th>
        <th>Quantity Available</th>
      </tr>
      <tr>
        <td>Teflon 1</td>
        <td><?php echo $teflon_count;?></td><!--Teflon Count -->
      </tr>
    </table>
    <!--Distilled Water-->
    <table width="244">
      <tr>
        <th>Distilled Water</th>
        <th>Jugs Available</th>
      </tr>
      <tr>
        <td>Distilled Water</td>
        <td><?php echo $distilled_count ?></td><!-- Distilled Water Count -->
      </tr>
    </table>
  </div>

  <!--Button to go back to the Admin Homepage-->
  <div class="myDiv">
    <button class="button" id="BackToAdminHomepage" onClick="location.href='index.html'"> Back To Admin Homepage
    </button>
  </div>
</body>

</html>




<?php
/*

Working row count code

$sql = "SELECT * FROM TEFLON";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo "The total number of rows are: ".$rowcount; 
}

*/




?>


