<?php
include"include/header.php";
?>

<!-- signup page start -->
<section class="signup">
	<div class="container">
		<div class="row signup-box">
			<div class="col-md-6 sign-up-left">
				<div class="absolute-div">
					<div class="row">
						<div class="col-md-6 offset-md-3 signup-text">
							<h2>sign up</h2>
						</div>
					</div>
					<form>
						<div class="form-group">
							<label>name</label>
							<input type="text" class="form-control" name="" placeholder="Khandakar Nahid">
						</div>

						<div class="form-group">
							<label>email</label>
							<input type="email" class="form-control" name="" placeholder="example@gmail.com">
						</div>

						<div class="form-group">
							<label>password</label>
							<input type="password" class="form-control" name="" placeholder="******">
						</div>

						<div class="form-group">
							<label>address</label>
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control" name="" placeholder="House">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" name="" placeholder="City">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" name="" placeholder="Division">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" name="" placeholder="Zip">
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="submit" class="btn" value="submit" name="">
						</div>
					</form>
				</div>
				<div class="row signup-bottom">
					<div class="col-md-12">
						<ul>
							<li>
								<a href="">
									<img src="images/login.png">
								</a>
							</li>
							<li>
								<a href="">
									<img src="images/logintwitter.png">
								</a>
							</li>
							<li>
								<a href="">
									<img src="images/loginfb.png">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 sign-up-right">
				<img src="images/signup.png" class="img-fluid">
				<div class="sign-up-right-hover">
					<a href="index.php">
						<img src="images/logo.png">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- signup page end -->