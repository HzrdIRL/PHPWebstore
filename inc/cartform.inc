	<form class="cartForm" name="cartForm" id="cartForm" action="cart.php" method="post">
					<fieldset class="form">
						<legend>Place Order</legend><br>
						
						<label>Products</label>
				<table class="order" id="order">
							<tr>
								<td>
									<label class="product">Wine Glass</label>
								</td>
								<td>
									<input type="checkbox" id="glass" class="item" value="4.99" />
								</td>
								<td>
									<input type="text" class="quantity" id="wineQuantity" name="wineQuantity" value="0" maxlength="2"/>						
								</td>
								<td>
									<label class="product">Flamingo</label>
								</td>
								<td>
									<input type="checkbox" id="flamingo"  class="item" value="10" />
								</td>
								<td>
									<input type="text" class="quantity" id="flamingoQuantity" name="flamingoQuantity" value="0" maxlength="2"/>						
								</td>
							</tr>
							<tr>
								<td>
									<label class="product">Jewllery</label>
								</td>
								<td>
									<input type="checkbox" id="jewellery" class="item" value="14" />
								</td>
								<td>
									<input type="text" class="quantity" id="jewelleryQuantity" name="jewelleryQuantity" value="0" maxlength="2"/>						
								</td>
								<td>
									<label class="product">Plants</label>
								</td>
								<td>
									<input type="checkbox" id="plants" name="plants" class="item" value="20" />
								</td>
								<td>
									<input type="text" class="quantity" id="plantsQuantity" name="plantsQuantity" value="0" maxlength="2"/>						
								</td>
							</tr>
							<tr>
								<td>
									<label class="product">Fabrics</label>
								</td>
								<td>
									<input type="checkbox" id="fabrics" class="item" value="5" />
								</td>
								<td>
									<input type="text" class="quantity" id="fabricsQuantity" value="0" name="fabricsQuantity" maxlength="2"/>						
								</td>
								<td>
									<label class="product">Beach Ring</label>
								</td>
								<td>
									<input type="checkbox" id="decore" name="decore" class="item" value="149" />
								</td>
								<td>
									<input type="text" class="quantity" id="decoreQuantity" name="decoreQuantity" value="0" maxlength="2"/>						
								</td>
							</tr>
			
							
						</table>
			
						<label id="message">Message</label>
						<textarea name="message" placeholder="Shipping instructions? Special requirements? Ask away :)"></textarea>
						<table>
							<tr>	
								<td>
									<label id="totalPrice" class="totalPrice">Total Price</label>
								</td>
								<td>
									<p class="totalPrice" id="showPrice">$</p>
								</td>
							</tr>
						</table>

						<label id="submit"></label>
						<input class="actionButtons" id="submit" type="submit" value="Add to Cart" />
					</fieldset>
				</form>