<?php
include"include/header.php";
include"include/topbar.php";
?>


<!-- profile page start -->
<section class="profile-page section-padding">
	<div class="container">

		<div class="row">
			<!-- left part start -->
			<div class="col-md-3">
				<div class="visitor-image">
					
				</div>
			</div>
			<!-- left part end -->

			<!-- right part start -->
			<div class="col-md-9">
				<div class="visitor-info">
					<h2>Khandaker Nahid</h2>
					<p>Email: Example@gmail.com</p>
					<p>Phone: 0123456789</p>
				</div>
			</div>
			<!-- right part end -->
		</div>

		<!-- middle part start -->
		<div class="row profile-middle">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2 active-order-list">
						<h2>my order list</h2>
						<i class="fas fa-angle-down active-description"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- middle part end -->

		<!-- orderlist row start -->
		<div class="row orderlist">

			<!-- item start -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h2>07/05/2020</h2>
					</div>
				</div>
				<div class="row orderlist-row">
					<div class="col-md-2">
						<img src="images/product_4.jpg" class="img-fluid">
					</div>
					<div class="col-md-2 orderlist-name">
						<div class="orderlist-name-box">
							<p>Brocolly</p>
							<h2>320 TK</h2>
						</div>
					</div>
					<div class="col-md-2 orderlist-name">
						<div class="orderlist-name-box">
							<p>delivered</p>
						</div>
					</div>
					<div class="col-md-3 orderlist-name">
						<div class="orderlist-name-box">
							<h2> <span>Price Paid</span> : 640 Tk</h2>
						</div>
					</div>
					<div class="col-md-2 orderlist-name">
						<div class="orderlist-name-box order-review">
							<p class="show-review-popup" id="review_id">review</p>
						</div>

						<!-- order review popup start -->
						<div class="order-review-popup review_id">
							<div class="container">
								<div class="row">
									<div class="col-md-6 offset-md-3 main-popup-box">
										<i class="fas fa-times hide-popup"></i>
										<div class="order-review-popup-box">
											<img src="images/review.png" class="img-fluid review-img">
											<div class="row">

												<!-- leftr part start -->
												<div class="col-md-8 order-review-popup-box-left">
													<p>review</p>
													<h2>rate this product</h2>
													<ul>
														<li>
															<a href="">
																<i class="fas fa-star"></i>
															</a>
														</li>
														<li>
															<a href="">
																<i class="fas fa-star"></i>
															</a>
														</li>
														<li>
															<a href="">
																<i class="fas fa-star"></i>
															</a>
														</li>
														<li>
															<a href="">
																<i class="fas fa-star"></i>
															</a>
														</li>
														<li>
															<a href="">
																<i class="fas fa-star"></i>
															</a>
														</li>
													</ul>
													<form>
														<div class="form-group">
															<textarea class="form-control" rows="3"></textarea>
														</div>
														<div class="form-group submit-btn">
															<input type="submit" class="btn" value="Submit" name="">
														</div>
													</form>
												</div>
												<!-- leftr part end -->

												<!--  right part start -->
												<div class="col-md-4">
													<div class="popup-img">
														<img src="images/logo.png" class="img-fluid">
													</div>
													<div class="popup-img">
														<img src="images/product_4.jpg" class="img-fluid">
													</div>
												</div>
												<!--  right part end -->

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- order review popup end -->

					</div>
				</div>
			</div>
			<!-- item end -->



		</div>
		<!-- orderlist row end -->

	</div>
</section>
<!-- profile page end -->


<?php
include"include/footer.php";
?>