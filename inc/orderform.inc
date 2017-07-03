	<form class="orderForm" name="orderForm" id="orderForm" action="cart.php" method="post">
					<fieldset class="form">
						<legend>Place Order</legend><br>
						
						<label>Name</label>
						<input type="text" id="name" name="name" placeholder="Required for shipping" required="required"/>
						
					
						<label>Address</label>
						<input type="text" id="address" name="address" required="required" placeholder="Required for shipping"/>
						
						<label>Method</label>
				
							<select name="method" type="location" id="location">
								<option value="1">Pickup</option>
								<option value="2">Delivery</option>
							</select>
							
								<label>Email</label>
						<input type="email" id="email" name="email" required="required" placeholder="Required for receipt"/>
						
						<label id="submit"></label>
						<input class="actionButtons" id="submit" type="submit" value="Add to Cart"/>
					</fieldset>
				</form>