<!--
- s3309248
- s3380365 


date last edited: 11-08-14

latest changes:
	-re indented HTML structures

-->
<!-- include header elements -->
<?php include_once("inc/head.inc") ?>

<!-- include nav menu, logo banner and open body content -->
<?php include_once("inc/body.inc") ?>

				<h2 class="title">Contact Us</h2>
				<form class="content" name="contact" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php" method="post">

					<!--CONTACT DETAILS-->
					<p class="content">
					<label>Phone:</label>
					(03) 9399 8175<br /><br />
					<label>Opening Hours:</label>
					Mon-Sat: 10am-5.30pm<br />
					Sun: 10am-4pm<br /><br />
					<label>Address:</label> 16/11-19 Ferguson St Williamstown VIC
					</p>
					<br />
				

				
					<br />

					<!--CONTACT FORM-->
					<fieldset class="form">
						<legend>Email Enquiry</legend><br>
						<label id="name">Name</label>
						<input type="text" name="name" placeholder="e.g. John Smith" />
						
						<label id="email">Email</label>
						<input type="text" name="email" required="required" placeholder="e.g. john.smith@gmail.com" />
						
						<label id="subject">Subject</label>
						<select name="subject" required="required">
							<option value="">subject</option><!--null value needed for error fixing-->
							<option value="General Enquiry">General Enquiry</option>
							<option value="Order Enquiry">Order Enquiry</option>
							<option value="Other">Other</option>
						</select>
						
						<label id="message">Message</label>
						<textarea name="message" required="required" placeholder="Type your message here"></textarea>
						
						<label id="submit"></label>
						<input class="actionButtons" type="submit" value="Submit" />
					</fieldset>
				</form>
				<br />

<!-- include footer content -->
<?php include_once("inc/footer.inc") ?>
