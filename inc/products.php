
<!DOCTYPE html>

<!--
- s3309248
- s3380365 


date last edited: 11-08-14

latest changes:
	-re indented HTML structures
	-added new script
	-removed code bloat and tidied
	-removed gallery
	-moved addToCart and Quantity beneath product divs
-->

<html>

<?php include_once("inc/head.inc") ?>
<?php include_once("inc/body.inc") ?>
	
<!--START OF PAGE SECTION-->

			<h2 class="title">Products</h2>
			<p class="content">
			We are in the middle of building our website, soon enough you'll be able to purchase 
			all the great gifts you're used to seeing on our shelves, from the comfort of your computer.
			<br />
			<br />
			In the mean time, take a look at some of the wonderful things we have available right now!
			<br />
			<br />
			Click an image to view further information</p>
			<br />
			<!--table content-->
			<div class="hiddeninfo">
				<table class="products">
					<tr>
						<td>
							<a class="info" data-target="1"><img class="products" src="images/glass.jpg" alt="Wine Glasses"/></a>
						</td>
						<td>
							<a class="info" data-target="2"><img class="products" src="images/bird.jpg" alt="Garden Flamingo"/></a>
						</td>
						<td>
							<a class="info" data-target="3"><img class="products" src="images/jewel.jpg" alt="Jewellery"/></a>
						</td>
					</tr>
									
					<tr>
						<td>
							<a class="info" data-target="4"><img class="products" src="images/plant.jpg" alt="Potted Plants"/></a>
						</td>
						<td>
							<a class="info" data-target="5"><img class="products" src="images/cloth.jpg" alt="Fabrics"/></a>
						</td>
						<td>
							<a class="info" data-target="6"><img class="products" src="images/ring.jpg" alt="Decore"/></a>
						</td>						
					</tr>
				
				</table>
					

				<!--hidden info about products-->
			<?php include_once("inc/hiddeninfo.inc") ?>
			<div>
			<!--order form-->
			<?php include_once("inc/cartform.inc") ?>

			
	
			</div>
			<script>
				$('.info').on('click', function hideInfo()
				{
					$('.targetdiv').hide();
					$('#div' + $(this).data('target')).show();
				});
				$('.targetdiv').hide();
			</script>	
	
			<!--Calculate total purchase price -->
			<script>
				function calculate()
				{
					var form = document.getElementById('cartForm');
					var checkboxes = form.getElementsByClassName('item');   
					var price = 0;
					var item = 0;
					var quantity = form.getElementsByClassName('quantity');

					for (var i=0; i < checkboxes.length; i++) 
					{
					 if(checkboxes[i].checked == false)
						{
							quantity[i].value= '0';
						}
						else if (checkboxes[i].checked) 
						{
							item += parseFloat(checkboxes[i].value)*parseInt(quantity[i].value);
						}
					
					
					}
					var total = parseFloat(price + item).toFixed(2);
					var price = " &dollar;"+ total; 
					document.getElementById('showPrice').innerHTML = price;
					document.getElementById('showPrice').value = price;
				}

				document.getElementById('cartForm').addEventListener('change', calculate);
	
				// Run it once at startup
				calculate();

			</script>
			
	<br />
	<script>
	$document.ready(function(){
		$('#submit').click(function()
		{
			$.post("http://<?php echo $_SERVER['SERVER_NAME']; ?>/~s3380365/wp/a3/cart.php",
			{
					wineQuantity:$('#wineQuantity').val(),
					flamingoQuantity:$('#flamingoQuantity').val(),
					jewelleryQuantity:$('#jewelleryQuantity').val(),
					plantsQuantity:$('#plantsQuantity').val(),
					fabricsQuantity:$('#fabricsQuantity').val(),
					decoreQuantity:$('#decoreQuantity').val()
					<?php session_unset() ?>
			});
		});
	});
	</script>

	<?php include_once("inc/footer.inc") ?>
