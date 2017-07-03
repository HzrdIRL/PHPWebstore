		<!--
- s3309248
- s3380365 


date last edited: 11-08-14

latest changes:
	-re indented HTML structures
	-removed code bloat and tidied
	-moved gallery back to index from products

<?php include_once("inc/head.inc") ?>
<?php include_once("inc/body.inc") ?>
<!--content of page--->
<h2 class="title" id="myCart">Your Cart</h2>

	<?php

		if(isset($_POST['wineQuantity']))
		{
			session_unset();
		}
		
		if(!isset($_SESSION['total']))
		{
			$_SESSION['total'] = 0.0;
			$_SESSION['discounted'] = FALSE;
			
			//Populate cart data
			if(isset($_POST['wineQuantity']) && $_POST['wineQuantity'] > 0)
			{
				$_SESSION['wineQuantity'] = $_POST['wineQuantity'];
				$_SESSION['winetotal'] = $_POST['wineQuantity'] * '4.99';
				$_SESSION['total'] += $_POST['wineQuantity'] * '4.99';
			}
			
			if(isset($_POST['flamingoQuantity']) && $_POST['flamingoQuantity'] > 0)
			{
				$_SESSION['flamingoQuantity'] = $_POST['flamingoQuantity'];
				$_SESSION['flamingototal'] = $_POST['flamingoQuantity'] * '10';
				$_SESSION['total'] += $_POST['flamingoQuantity'] * '10';
			}
				
			if(isset($_POST['jewelleryQuantity']) && $_POST['jewelleryQuantity'] > 0)
			{
				$_SESSION['jewelleryQuantity'] = $_POST['jewelleryQuantity'];
				$_SESSION['jewellerytotal'] = $_POST['jewelleryQuantity'] * '14';
				$_SESSION['total'] += $_POST['jewelleryQuantity'] * '14';
			}
			
			if(isset($_POST['plantsQuantity']) && $_POST['plantsQuantity'] > 0)
			{
				$_SESSION['plantsQuantity'] = $_POST['plantsQuantity'];
				$_SESSION['plantstotal'] = $_POST['plantsQuantity'] * '20';
				$_SESSION['total'] += $_POST['plantsQuantity'] * '20';
			}
			
			if(isset($_POST['fabricsQuantity']) && $_POST['fabricsQuantity'] > 0)
			{
				$_SESSION['fabricsQuantity'] = $_POST['fabricsQuantity'];
				$_SESSION['fabricstotal'] = $_POST['fabricsQuantity'] * '5';
				$_SESSION['total'] += $_POST['fabricsQuantity'] * '5';
			}
			
			if(isset($_POST['decoreQuantity']) && $_POST['decoreQuantity'] > 0)
			{
				$_SESSION['decoreQuantity'] = $_POST['decoreQuantity'];
				$_SESSION['decoretotal'] = $_POST['decoreQuantity'] * '149';
				$_SESSION['total'] += $_POST['decoreQuantity'] * '149';
			
			}
		}	
		
		if(!$_SESSION['total'] > 0)
		{
			?>
			<script>
			$('#myCart').html("Empty Cart");
			</script>
			<p class="content">
				It appears the cart is empty, 
				return to the products page and select your desired products.
			</p>
			<?php
		}
		else
		{
			?>
			<table class="carttable">
				<tr>
					<th>Product</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Sub Total</th>
				</tr>
			<?php
			//Display cart data
			if(isset($_SESSION['winetotal']))
			{
				?>
				<tr>
					<td>Wine Glass</td>
					<td><?php echo $_SESSION['wineQuantity'] ?></td>
					<td>$4.99</td>
					<td>$<?php echo $_SESSION['winetotal']; ?></td>
				</tr>
				<?php
			}
			
			if(isset($_SESSION['flamingototal']))
			{
				?>
				<tr>
					<td>Flamingo</td>
					<td><?php echo $_SESSION['flamingoQuantity'] ?></td>
					<td>$10</td>
					<td>$<?php echo $_SESSION['flamingototal']; ?></td>
				</tr>
				<?php
			}
				
			if(isset($_SESSION['jewellerytotal']))
			{
				?>
				<tr>
					<td>Jewellery</td>
					<td><?php echo $_SESSION['jewelleryQuantity'] ?></td>
					<td>$14</td>
					<td>$<?php echo $_SESSION['jewellerytotal']; ?></td>
				</tr>
				<?php
			}
			
			if(isset($_SESSION['plantstotal']))
			{
				?>
				<tr>
					<td>Plants</td>
					<td><?php echo $_SESSION['plantsQuantity'] ?></td>
					<td>$20</td>		
					<td>$<?php echo $_SESSION['plantstotal']; ?></td>
				</tr>
				<?php
			}
			
			if(isset($_SESSION['fabricstotal']))
			{
				?>
				<tr>
					<td>Fabric</td>
					<td><?php echo $_SESSION['fabricsQuantity'] ?></td>
					<td>$5</td>
					<td>$<?php echo $_SESSION['fabricstotal']; ?></td>
				</tr>
				<?php
			}
			
			if(isset($_SESSION['decoretotal']))
			{
				?>
				<tr>
					<td>decore</td>
					<td><?php echo $_SESSION['decoreQuantity'] ?></td>
					<td>$149</td>
					<td>$<?php echo $_SESSION['decoretotal']; ?></td>
				</tr>
				<?php
			}
			?>
			
			</table>
			</br >
			<?php
				//total price
				echo "<p class=total>Total price: $" . $_SESSION['total'] . "</p>";
			?>
			</br >
			
			<fieldset class="form">
				<legend>Enter Coupon</legend>
				<form class="form" method="post" action="cart.php">
					<label>Code: </label>
					<input type="text" name="coupon" id="coupon" pattern="^[0-9]{5}[-]{1}[0-9]{5}[-]{1}[A-Z]{2}$" required>
					<input class="actionButtons" type="submit" name="getDiscount" id="getDiscount" value="Go!" />
					<p></p>
				</form>
			</fieldset>

			<script>
					<?php
					if(isset($_POST['getDiscount']) && $_SESSION['discounted'] != TRUE)
					{	
						$_SESSION['coupon'] = $_POST['coupon'];
						$coupon = explode("-", $_SESSION['coupon']);
						print($coupon);
						$chk1 = 0;
						$chk2 = 0;
						$match = array(
						"A"	=> 0,
						"B"	=> 1,
						"C"	=> 2,
						"D"	=> 3,
						"E"	=> 4,
						"F"	=> 5,
						"G"	=> 6,
						"H"	=> 7,
						"I"	=> 8,
						"J"	=> 9,
						"K"	=> 10,
						"L"	=> 11,
						"M"	=> 12,
						"N"	=> 13,
						"O"	=> 14,
						"P"	=> 15,
						"Q"	=> 16,
						"R"	=> 17,
						"S"	=> 18,
						"T"	=> 19,
						"U"	=> 20,
						"V"	=> 21,
						"W"	=> 22,
						"X"	=> 23,
						"Y"	=> 24,
						"Z"	=> 25
						);
			
						$total1=(((($coupon[0][0] + $coupon[0][1] ) * $coupon[0][2] + 
						$coupon[0][3] ) * $coupon[0][4] ) % 26);
								
						$total2=(((($coupon[1][0] + $coupon[1][1] ) * $coupon[1][2] + 
						$coupon[1][3]) * $coupon[1][4]) % 26);
											
								
						if($total1==$match[$coupon[2][0]])
						{	
							if($total2==$match[$coupon[2][1]])
							{	
								$_SESSION['total'] *= 0.8;
								$_SESSION['discounted'] = TRUE;
								round($_SESSION['total'], 2);
								echo "<p class=total>Total price: $" . $_SESSION['total'] . "</p>";
							}
							else
							{
									
							}
						}
						else
						{
								
						}
					}
				?>
	</script>
	<br />
	<?php
		include_once("inc/orderform.inc");
		}
	?>
<br />
<!--footer-->
<?php include_once("inc/footer.inc") ?>