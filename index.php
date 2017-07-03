<!--
- s3309248
- s3380365 

date last edited: 

latest changes:
	
-->

<!-- include header elements -->
<?php include_once("inc/head.inc") ?>

<!-- include nav menu, logo banner and open body content -->
<?php include_once("inc/body.inc") ?>

				<h2 class="title">Welcome</h2>
				<p class="content">
				Welcome to Love It!<br /><br />
				We are a family owned business in Williamstown, Melbourne. 
				Specialising in brilliant gift ideas from home decore to that special something that is impossible to find, until now! 
				We're sure to have the right gift for you.
				<br />
				</p>

				<h2 class="title">Free Gift Wrapping</h2>
				<p class="content">We are renowned for our free and fabulous gift wrapping.</p>

				<h2 class="title">Free Delivery</h2>
				<p class="content">We provide free delivery of furniture and other items that you can't take in a normal vehicle and at a time that suits you.
				After hours delivery is our specialty. (Within 40km of Williamstown. Other areas can be negotiated).</p>

				<!--INSTAGRAM GALLERY-->
				<h2 class="title">Instagram</h2>
				<p class="content">Follow our <a href="http://instagram.com/loveitgifts">Instagram</a> 
				to see more fabulous goodies</p>
				<br />
			
				<div id="gallery">
					<div class="instagram">
						<script>
						jQuery(function($) 
							{
							$('.instagram').on('willLoadInstagram', function(event, options) {
								console.log(options);
							});
							$('.instagram').on('didLoadInstagram', function(event, response) {
								console.log(response);
							});
							$('.instagram').instagram({
								userId: '546932204',
								clientId: 'c4768181172244e8a1fded09cc395059'
							});
						});
						</script>
					</div>
				</div>
				</br>
				
<!-- include footer content -->
<?php include_once("inc/footer.inc") ?>