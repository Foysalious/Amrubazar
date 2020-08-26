<?php
include"include/header.php";
include"include/topbar.php";
?>


<section class="contact-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="images/contact.png" class="img-fluid">
			</div>
		</div>
	</div>
</section>


<!-- contact form start -->
<section class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name*" name="">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email*" name="">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn" value="Send Message" name="">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- contact form end -->


<?php
include"include/footer.php";
?>