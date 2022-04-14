<?php
include 'dbcon.php';
if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}


?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Customer Design</title>
	<link href="css/Customer_Homepage.css" rel="stylesheet" type="text/css">

	<!--bootstrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
</head>
<header>
	<h1>
		<a href = "index.php"><img src="images/MB_Horz_3Clr_whiteLtrs.png" class="imageHeader" alt="KSU Header"/></a>
		This is the Customer Design Page
	</h1>
</header>

<body class = "body">
	<style>
		
		}
		table {
			background-color: tan;
			border: 0px;
			padding: 0px;

		}


		button {
			margin: 0 auto;
		}

		select,
		input {
			float: right;
		}
	</style>

	<table class="AlignTable">
		<tr>
			<td>
				<!-- T-Shirt -->
				<form action='tshirt_sold.php' method='post'>
					<table class = "AlignTable">
						<tr>
							<td><img src="images/white_tshirt_picture.jpeg" class="MarginImage" alt="tshirt"
									id="WhiteTShirtPicture"></td>

						</tr>
						<!-- Add Ability to Select customer
							Need to add PHP code here-->
							
						<?php
						// Getting customer id from CUSTOMER table
						$sql = "SELECT idCUSTOMER, KSU_ID FROM CUSTOMER";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							echo"
							<tr>
							<td>
							<label for = 'customer'>Customer:</label>
							<select class='selectSpacing' name='customer' id='customer'>
							";
							while($row = $result->fetch_assoc()) {
								echo "
								<option value=$row[idCUSTOMER]>$row[KSU_ID]</option>
								";
							}
							echo "
							</td>
							</tr>";
						} else {
							echo "0 results";
						  }
						?>	
						<tr>
							<td>
								<label for="color">Color:</label>
								<select class="selectSpacing" name="tshirt_color" id="color">
									<option value="white">white</option>
									<option value="grey">grey</option>
									<option value="black">black</option>
								</select>
							</td>

						</tr>
						<tr>
							<td>
								<label for="size">Size:</label>
								<select class="selectSpacing" name="tshirt_size" id="size">
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
							</td>

						</tr>
						<tr>
							<td>
								<label for="Quantity">Quantity:</label>
								<input class="selectSpacing" type="number" id="tshirt_quantity" name="tshirt_quantity"
									min="0" max="250">
							</td>

						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="submit" value=" SUBMIT"></td>
						</tr>
					</table>
				</form>
			</td>
			<!-- Hoodie 
			<td>
				<form action='hoodie_sold.php' method='post'>
					<table>
						<tr>
							<td><img src="images/White_Sweatshirt_Picture.jpeg" class="MarginImageSweatShirt"
									alt="tshirt" id="WhiteSweatShirt"></td>
						</tr>
						<tr>
							<td>
								<label for="SweatshirtColor">Color:</label>
								<select class="selectSpacing" name="hoodie_color" id="SweatShirtolor">
									<option value="white">white</option>
									<option value="grey">grey</option>
									<option value="black">black</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="size">Size:</label>
								<select class="selectSpacing" name="hoodie_size" id="SweatshirtSize">
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="Quantity">Quantity:</label>
								<input class="selectSpacing" type="number" id="SweatshirtQuantity"
									name="hoodie_quantity" min="0" max="250">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="submit" value=" SUBMIT"></td>
						</tr>
					</table>
				</form>
			</td>
			-->
			<!-- Pretreated T-Shirt-->
			<td>
				<form action = 'pretreated_sold.php' method = 'post'>
					<table>
						<tr>
							<td> <img src="images/pretreated_shirt.jpeg" class="MarginImageSweatShirt"
								alt="tshirt" id="WhiteSweatShirt"></td>
						</tr>
						<?php
						// Getting customer id from CUSTOMER table
						$sql = "SELECT idCUSTOMER, KSU_ID FROM CUSTOMER";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							echo"
							<tr>
							<td>
							<label for = 'customer'>Customer:</label>
							<select class='selectSpacing' name='customer' id='customer'>
							";
							while($row = $result->fetch_assoc()) {
								echo "
								<option value=$row[idCUSTOMER]>$row[KSU_ID]</option>
								";
							}
							echo "
							</td>
							</tr>";
						} else {
							echo "0 results";
						  }
						?>	
						<tr>
							<td>
								<label for="PretreatedColor">Color:</label>
								<select class="selectSpacing" name="pretreated_color" id="pretreated_color">
									<option value="white">white</option>
									<option value="grey">grey</option>
									<option value="black">black</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="size">Size:</label>
								<select class="selectSpacing" name="pretreated_size" id="pretreated_size">
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="Quantity">Quantity:</label>
								<input class="selectSpacing" type="number" id="pretreated_quantity"
									name="pretreated_quantity" min="0" max="250">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="submit" value=" SUBMIT"></td>
						</tr>
					</table>
				</form>

			</td>
		</tr>
	</table>

	<div>
		<p><?php echo $customerid_result ?></p>
	</div>





<
	<div class="container" style = "width:350px">
  <h2>Example Shirt Prints</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >

      <div class="item active">
        <img src="images/IMG_4451.jpg" alt="Owl" style="width:100%;">
        <div class="carousel-caption">
          <h3>Owl printed on a black T-Shirt</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/IMG_4452.jpg" alt="KSU Logo" style="width:100%;">
        <div class="carousel-caption">
          <h3>KSU Logo printed on a white T-Shirt</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="images/IMG_4455.jpg" alt="Business Technology Club Logo" style="width:100%;">
        <div class="carousel-caption">
          <h3>Business Technology Club logo printed on a white T-Shirt</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>





	<!-- Button to go back to Homepage - index.html-->
	<button class="button" onClick="location.href='index.php'">
		Back to Homepage
	</button>

</body>

</html>