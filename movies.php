<!--
- s3309248
- s3380365 


date last edited: 11-08-14

latest changes:
	-re indented HTML structures
	-removed code bloat and tidied
	-moved gallery back to index from products
-->
	<!-- include header elements -->
	<?php include_once("inc/head.inc"); ?>
	
	<!-- include nav menu, logo banner and open body content -->
	<?php include_once("inc/body.inc"); ?>
	
	<h2 class="title">Current FIlms</h2>
   
	<p class="prompt" id="prompt" name="prompt">
	Select an option to view it's information.
	</p>
   
	<select class="filmSelect" name="filmData" id="filmData" required="required">
      <option disabled value="">Select...</option>
		<option value="ALL">All Films</option>
		<option value="RC">Romantic Comedy</option>
		<option value="AC">Action</option>
		<option value="CH">Kids Film/s</option>
		<option value="FO">Foreign Feature</option>
	</select>
   <div id="data" name="data">
   </div>
   <br />
	<script>
	$(document).ready(function(){
		$('#filmData').on('change', function(){
			$.post("http://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/movie-service.php",
			{
				filmID:$('#filmData').val(),
				CRC:"s3309248"
			},
			function(data,status)
			{
				$('#data').html(data);
			});
		});
    });
	</script>
				
<!-- include footer content -->
<?php include_once("inc/footer.inc"); ?>