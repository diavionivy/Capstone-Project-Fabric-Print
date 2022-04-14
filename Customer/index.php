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
$grey_shirt_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'XS'";
$grey_shirt_xs_result=mysqli_query($conn,$grey_shirt_xs);
$grey_shirt_xs_count=mysqli_num_rows($grey_shirt_xs_result);

// T-shirt (Grey) S
$grey_shirt_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'S'";
$grey_shirt_s_result=mysqli_query($conn,$grey_shirt_s);
$grey_shirt_s_count=mysqli_num_rows($grey_shirt_s_result);

// T-shirt (Grey) M
$grey_shirt_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'M'";
$grey_shirt_m_result=mysqli_query($conn,$grey_shirt_m);
$grey_shirt_m_count=mysqli_num_rows($grey_shirt_m_result);

// T-shirt (Grey) L
$grey_shirt_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'L'";
$grey_shirt_l_result=mysqli_query($conn,$grey_shirt_l);
$grey_shirt_l_count=mysqli_num_rows($grey_shirt_l_result);

// T-shirt (Grey) XL
$grey_shirt_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'XL'";
$grey_shirt_xl_result=mysqli_query($conn,$grey_shirt_xl);
$grey_shirt_xl_count=mysqli_num_rows($grey_shirt_xl_result);

// T-shirt (Black) XS
$black_shirt_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'XS'";
$black_shirt_xs_result=mysqli_query($conn,$black_shirt_xs);
$black_shirt_xs_count=mysqli_num_rows($black_shirt_xs_result);

// T-shirt (Black) S
$black_shirt_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'S'";
$black_shirt_s_result=mysqli_query($conn,$black_shirt_s);
$black_shirt_s_count=mysqli_num_rows($black_shirt_s_result);

// T-shirt (Black) M
$black_shirt_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'M'";
$black_shirt_m_result=mysqli_query($conn,$black_shirt_m);
$black_shirt_m_count=mysqli_num_rows($black_shirt_m_result);

// T-shirt (Black) L
$black_shirt_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'L'";
$black_shirt_l_result=mysqli_query($conn,$black_shirt_l);
$black_shirt_l_count=mysqli_num_rows($black_shirt_l_result);

// T-shirt (Black) XL
$black_shirt_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'XL'";
$black_shirt_xl_result=mysqli_query($conn,$black_shirt_xl);
$black_shirt_xl_count=mysqli_num_rows($black_shirt_xl_result);

// T-shirt(pre-treated) (White) XS
$white_pre_treat_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'XS'";
$white_pre_treat_xs_result=mysqli_query($conn,$white_pre_treat_xs);
$white_pre_treat_xs_count=mysqli_num_rows($white_pre_treat_xs_result);

// T-shirt(pre-treated) (White) S
$white_pre_treat_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'S'";
$white_pre_treat_s_result=mysqli_query($conn,$white_pre_treat_s);
$white_pre_treat_s_count=mysqli_num_rows($white_pre_treat_s_result);

// T-shirt(pre-treated) (White) M
$white_pre_treat_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'M'";
$white_pre_treat_m_result=mysqli_query($conn,$white_pre_treat_m);
$white_pre_treat_m_count=mysqli_num_rows($white_pre_treat_m_result);

// T-shirt(pre-treated) (White) L
$white_pre_treat_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'L'";
$white_pre_treat_l_result=mysqli_query($conn,$white_pre_treat_l);
$white_pre_treat_l_count=mysqli_num_rows($white_pre_treat_l_result);

// T-shirt(pre-treated) (White) XL
$white_pre_treat_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'XL'";
$white_pre_treat_xl_result=mysqli_query($conn,$white_pre_treat_xl);
$white_pre_treat_xl_count=mysqli_num_rows($white_pre_treat_xl_result);

// T-shirt(pre-treated) (Grey) XS
$grey_pre_treat_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'XS'";
$grey_pre_treat_xs_result=mysqli_query($conn,$grey_pre_treat_xs);
$grey_pre_treat_xs_count=mysqli_num_rows($grey_pre_treat_xs_result);

// T-shirt(pre-treated) (Grey) S
$grey_pre_treat_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'S'";
$grey_pre_treat_s_result=mysqli_query($conn,$grey_pre_treat_s);
$grey_pre_treat_s_count=mysqli_num_rows($grey_pre_treat_s_result);

// T-shirt(pre-treated) (Grey) M
$grey_pre_treat_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'M'";
$grey_pre_treat_m_result=mysqli_query($conn,$grey_pre_treat_m);
$grey_pre_treat_m_count=mysqli_num_rows($grey_pre_treat_m_result);

// T-shirt(pre-treated) (Grey) L
$grey_pre_treat_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'L'";
$grey_pre_treat_l_result=mysqli_query($conn,$grey_pre_treat_l);
$grey_pre_treat_l_count=mysqli_num_rows($grey_pre_treat_l_result);

// T-shirt(pre-treated) (Grey) XL
$grey_pre_treat_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'XL'";
$grey_pre_treat_xl_result=mysqli_query($conn,$grey_pre_treat_xl);
$grey_pre_treat_xl_count=mysqli_num_rows($grey_pre_treat_xl_result);

// T-shirt(pre-treated) (Black) XS
$black_pre_treat_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'XS'";
$black_pre_treat_xs_result=mysqli_query($conn,$black_pre_treat_xs);
$black_pre_treat_xs_count=mysqli_num_rows($black_pre_treat_xs_result);

// T-shirt(pre-treated) (Black) S
$black_pre_treat_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'S'";
$black_pre_treat_s_result=mysqli_query($conn,$black_pre_treat_s);
$black_pre_treat_s_count=mysqli_num_rows($black_pre_treat_s_result);

// T-shirt(pre-treated) (Black) M
$black_pre_treat_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'M'";
$black_pre_treat_m_result=mysqli_query($conn,$black_pre_treat_m);
$black_pre_treat_m_count=mysqli_num_rows($black_pre_treat_m_result);

// T-shirt(pre-treated) (Black) L
$black_pre_treat_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'L'";
$black_pre_treat_l_result=mysqli_query($conn,$black_pre_treat_l);
$black_pre_treat_l_count=mysqli_num_rows($black_pre_treat_l_result);

// T-shirt(pre-treated) (Black) XL
$black_pre_treat_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'XL'";
$black_pre_treat_xl_result=mysqli_query($conn,$black_pre_treat_xl);
$black_pre_treat_xl_count=mysqli_num_rows($black_pre_treat_xl_result);
?>

<html>
	

<head>
	<meta charset="UTF-8">
	<title>Customer Homepage</title>
	<link href="css/Customer_Homepage.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>

</style>
<header>
	<h1>
	<a href = "index.php"><img src="images/MB_Horz_3Clr_whiteLtrs.png" class="imageHeader" alt="KSU Header"/></a>		This is the Customer Homepage
	</h1>
</header>

<!-- TODO: Display live inventory count-->
<!-- Displays Inventory counts for current inventory for the Customer-->
<body class = "body">
	<h2>Location: Burruss Building 465</h2>
	<h2>Price:</h2>
	<li>$2 if you bring your own shirt</li>
	<li>$5 if you want to purchase a shirt</li>
	<h3>Quantity available</h3>
	<table class="table table-condensed center">
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
            <td><?php echo $grey_shirt_xs_count ?></td><!--XS-->
            <td><?php echo $grey_shirt_s_count ?></td><!--S-->
            <td><?php echo $grey_shirt_m_count ?></td><!--M-->
            <td><?php echo $grey_shirt_l_count ?></td><!--L-->
            <td><?php echo $grey_shirt_xl_count ?></td><!--XL-->
			<td>Yes</td>
		</tr>
		<tr>
			<td>T-shirt (Black)</td>
			<td><?php echo $black_shirt_xs_count ?></td><!--XS-->
            <td><?php echo $black_shirt_s_count ?></td><!--S-->
            <td><?php echo $black_shirt_m_count ?></td><!--M-->
            <td><?php echo $black_shirt_l_count ?></td><!--L-->
            <td><?php echo $black_shirt_xl_count ?></td><!--XL-->
			<td>Yes</td>

		</tr>
		<tr>
			<td>Pre-treated T-Shirt (White)</td>
			<td><?php echo $white_pre_treat_xs_count ?></td><!--XS-->
            <td><?php echo $white_pre_treat_s_count ?></td><!--S-->
            <td><?php echo $white_pre_treat_m_count ?></td><!--M-->
            <td><?php echo $white_pre_treat_l_count ?></td><!--L-->
            <td><?php echo $white_pre_treat_xl_count ?></td><!--XL-->
			<td>No</td>
		</tr>
		<tr>
			<td>Pre-treated T-Shirt (Grey)</td>
            <td><?php echo $grey_pre_treat_xs_count ?></td><!--XS-->
            <td><?php echo $grey_pre_treat_s_count ?></td><!--S-->
            <td><?php echo $grey_pre_treat_m_count ?></td><!--M-->
            <td><?php echo $grey_pre_treat_l_count ?></td><!--L-->
            <td><?php echo $grey_pre_treat_xl_count ?></td><!--XL-->
			<td>No</td>
		</tr>
		<tr>
			<td>Pre-treated T-Shirt (Black)</td>
            <td><?php echo $black_pre_treat_xs_count ?></td><!--XS-->
            <td><?php echo $black_pre_treat_s_count ?></td><!--S-->
            <td><?php echo $black_pre_treat_m_count ?></td><!--M-->
            <td><?php echo $black_pre_treat_l_count ?></td><!--L-->
            <td><?php echo $black_pre_treat_xl_count ?></td><!--XL-->
			<td>No</td>
		</tr>
	</table>

	<!-- Button to go to the Customer Info Page -->
	<button class="button" onClick="location.href='Customer_Info.html'">
		To Customer Info Page
	</button>


	<div>
		<button class="button" id="toAdminIndex" onClick="location.href='../Admin'">
		  To Admin Index
		</button>
	  </div>

	  <div class="container">                 
  <ul class="pager">
    <li class="previous"><a href="Customer_Info.html">To Customer Info Page</a></li>
    <li class="next"><a href="../Admin">To Admin Index</a></li>
  </ul>
</div>
</body>

</html>