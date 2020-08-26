<?php
include"include/header.php";
include"include/topbar.php";
include"include/navbar-dropdown.php";
?>

<!-- page indicator section start -->
<section class="page-indicator">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li><a href="">food & more</a></li>
					<li><a href="">organic items</a></li>
					<li><a href="">food</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- page indicator section end -->



<!-- shop page main section start -->
<section class="shop section-padding">
	<div class="container">

		<!-- top row start -->
		<div class="row">
			<!-- left part start -->
			<div class="col-md-3">

				<!-- shop left image start -->
				<div class="shop-left-image for-mob">
					<a href="">
						
						<img src="images/03_ShopGrid_1_Column_2.png" class="img-fluid">

						<!-- child item start -->
						<div class="shop-left-image-child">
							<h2>organic mango</h2>
							<p>rajshahi</p>
							<p>
								<span>-20%</span>
							</p>
						</div>
						<!-- child item end -->

					</a>
				</div>
				<!-- shop left image end -->

				<!-- filter for mob start -->
				<div class="row filter-for-mob">
					<div class="col-6">
						<h2>filter item</h2>
					</div>
					<div class="col-6 filter-icon">
						<i class="fas fa-filter"></i>
					</div>
				</div>
				<!-- filter for mob end -->

				<div class="shop-left">
					
					<!-- price filter start -->
					<div class="price-filter">
						<h2>filter by price</h2>
					

						<!-- price filtering -->
	                    <div class="shop-filter">
	                        <div id="sliderpc"></div>
	                    </div>
	                    <!-- price filtering -->

	                    <div class="row">
	                    	<div class="col-md-8">
	                    		<p>Price : <span id="spanOutputpc"></span> </p>
	                    	</div>
	                    	<div class="col-md-4 filter">
	                    		<p>filter</p>
	                    	</div>
	                    </div>

	                </div>
					<!-- price filter end -->

                    <!-- type start -->
                    <div class="type">
                    	<h2>type</h2>
                    	<form>
                    		<label class="custom_checkbox">food
							  	<input type="checkbox">
							  	<span class="checkmark"></span>
							</label>

							<label class="custom_checkbox">food
							  	<input type="checkbox">
							  	<span class="checkmark"></span>
							</label>

							<label class="custom_checkbox">food
							  	<input type="checkbox">
							  	<span class="checkmark"></span>
							</label>

							<label class="custom_checkbox">food
							  	<input type="checkbox">
							  	<span class="checkmark"></span>
							</label>
                    	</form>
                    </div>
                    <!-- type end -->

                     <!-- organic or start -->
                    <div class="type">
                    	<h2>organic or</h2>
                    	<form>
                    		<label class="custom_checkbox">organic
							  	<input type="checkbox">
							  	<span class="checkmark"></span>
							</label>

							<label class="custom_checkbox">non organic
							  	<input type="checkbox">
							  	<span class="checkmark"></span>
							</label>
                    	</form>
                    </div>
                    <!-- organic or end -->

				</div>

				<!-- shop left image start -->
				<div class="shop-left-image for-pc">
					<a href="">
						
						<img src="images/03_ShopGrid_1_Column_2.png" class="img-fluid">

						<!-- child item start -->
						<div class="shop-left-image-child">
							<h2>organic mango</h2>
							<p>rajshahi</p>
							<p>
								<span>-20%</span>
							</p>
						</div>
						<!-- child item end -->

					</a>
				</div>
				<!-- shop left image end -->

			</div>
			<!-- left part end -->


			<!-- right part start -->
			<div class="col-md-9">
				<div class="shop-right">
					
					<!-- shop right top start -->
					<div class="shop-right-top">
						<div class="row">
							
							<!-- left part start -->
							<div class="col-md-9 shop-right-top-left">
								<ul>
									<li>sort by : </li>
									<li class="click-sort sort-2" id="sort-2">price</li>
									<li class="click-sort sort-3" id="sort-3">rating</li>
									<li class="click-sort sort-4" id="sort-4">popularity</li>
									<li class="click-sort sort-5" id="sort-5">newest</li>
								</ul>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<div class="col-md-3 shop-right-top-right">
								<ul>
									<li><i class="fas fa-list"></i></li>
									<li><i class="fas fa-th-large active-type"></i></li>
								</ul>
							</div> 
							<!-- right part end -->

						</div>
					</div>
					<!-- shop right top end -->

					<!-- shop product start -->
					<div class="shop-product">

						<!-- grid wise -->
						<div class="row col-wise">
							
							<!-- product item start -->
							<div class="col-md-3 col-6 product-hover">
								<div class="product-item-01">
									<div class="product-hover-item">
										<p>-15%</p>
										<a href="">
											<img src="images/wishlist.png" class="img-fluid">
										</a>
										<a class="show-product-popup" id="profile_view_1">
	                                    	<i class="fas fa-eye"></i>
	                                  	</a>
									</div>

									<!-- main thumbnail -->
									<img src="images/12-1-170x185.jpg" class="img-fluid">
									<!-- main thumbnail -->

									<!-- go product details -->
									<a href="">
										<p>Organic Broccoli</p>
										<span>280.99 Tk</span>
									</a>
									<!-- go product details -->
									
									<div class="product-item-cart">
										<a href="">
											<img src="images/cart-bag.png"> add to bag
										</a>
									</div>
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<!-- product item end -->
							<!-- product quick view popup start -->
							<div class="product-quick-view profile_view_1">
								<i class="fas fa-times hide-quick-view"></i>
								<div class="container">
									<div class="row">
										<div class="col-md-12 product-quick-view-main-box" >
											
											<div class="row">
												<!-- left part start -->
												<div class="col-md-6">
													<div class="product-main-img">
														<a href="product-details.php">
															<img src="images/product_4.jpg" class="img-fluid to-img1 ">
															<img src="images/9-1-170x185.jpg" class="img-fluid to-img2 ">
															<img src="images/product_1.png" class="img-fluid to-img3">
														</a>
													</div>

													<!-- bottom image select start -->
													<div class="row product-bottom-img-row produc-quick-view-img">
														<div class="col-md-4 col-4">
															<img src="images/product_4.jpg" class="img-fluid for-img1">
															<i class="fas fa-caret-up caret-one"></i>
														</div>
														<div class="col-md-4 col-4">
															<img src="images/9-1-170x185.jpg" class="img-fluid for-img2" >
															<i class="fas fa-caret-up caret-two"></i>
														</div>
														<div class="col-md-4 col-4">
															<img src="images/product_1.png" class="img-fluid for-img3">
															<i class="fas fa-caret-up caret-three"></i>
														</div>
													</div>
													<!-- bottom image select end -->
												</div>
												<!-- left part end -->

												<!-- right part start -->
												<div class="col-md-6">
													<div class="product-quick-view-right">
														<h2 class="quick-view-heading">black grape</h2>

														<!-- review start -->
														<div class="row">
															<div class="col-md-6 col-6 product-quick-view-right-left">
																<ul>
																	<li>
																		<a href=""><i class="fas fa-star"></i></a>
																	</li>
																	<li>
																		<a href=""><i class="fas fa-star"></i></a>
																	</li>
																	<li>
																		<a href=""><i class="fas fa-star"></i></a>
																	</li>
																	<li>
																		<a href=""><i class="fas fa-star"></i></a>
																	</li>
																	<li>
																		<a href=""><i class="fas fa-star"></i></a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-6">
																<p>122 reviews</p>
															</div>
														</div>
														<!-- review end -->

														<!-- avaiablity and stock start -->
														<div class="row available">
															<div class="col-md-6 col-6">
																<h2>availablity : </h2>
															</div>
															<div class="col-md-6 col-6">
																<h2>in stock</h2>
															</div>
														</div>
														<!-- avaiablity and stock end -->

														<!-- price row start -->
														<div class="row">
															<div class="col-md-12">
																<h2 class="quick-view-heading">240.00 tk/kg</h2>
															</div>
														</div>
														<!-- price row end -->

														<!-- description row start -->
														<div class="row">
															<div class="col-md-12">
																<h2 >description</h2>
															</div>
															<div class="col-md-12">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
															</div>
														</div>
														<!-- description row end -->

													</div>
												</div>
												<!-- right part end -->

											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- product quick view popup  end -->

						
						
						</div>
						<!-- grid wise -->

						<!-- list wise start-->
						<div class="row list-wise">
							<h2>No Product Found</h2>
						</div>
						<!-- list wise end-->

					</div>
					<!-- shop product end -->

				</div>

				<!-- shop page pagination start -->
				<div class="shop-pagination">
					<div class="row">
						<div class="col-md-12">
							<ul>
								<li class="click-paginate paginate-1 active-pagination" id="paginate-1">
									<a href="">1</a>
								</li>
								<li class="click-paginate paginate-2" id="paginate-2">
									<a href="">2</a>
								</li>
								<li class="click-paginate paginate-3" id="paginate-3">
									<a href="">3</a>
								</li>
								<li>
									...
								</li>
								<li class="click-paginate paginate-4" id="paginate-4">
									<a href="">10</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- shop page pagination end -->

			</div>
			<!-- right part end -->
		</div>
		<!-- top row end -->

		<!-- latest product title row start -->
		<div class="row latest-product-title">
			<div class="col-md-12">
				<h2>latest <span>product</span> </h2>
			</div>
		</div>
		<!-- latest product title row end -->

		<!-- latest product row start -->
		<div class="row">
			<!-- slider start -->
			<div class="latest-product-carousel latest-product-carousel-shop owl-carousel owl-theme">

				<!-- product item start -->
				<div class="col-md-12 col-12 product-hover">
					<div class="product-item-01">
						<div class="product-hover-item">
							<p>-15%</p>
							<a href="">
								<img src="images/wishlist.png" class="img-fluid">
							</a>
							<a class="show-product-popup" id="profile_view_1">
								<i class="fas fa-eye"></i>
							</a>
						</div>

						<!-- main thumbnail -->
						<img src="images/12-1-170x185.jpg" class="img-fluid">
						<!-- main thumbnail -->

						<!-- go product details -->
						<a href="">
							<p>Organic Broccoli</p>
							<span>280.99 Tk</span>
						</a>
						<!-- go product details -->
						
						<div class="product-item-cart">
							<a href="">
								<img src="images/cart-bag.png"> add to bag
							</a>
						</div>
						<ul>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
					</div>
				</div>
				<!-- product item end -->

    		</div>
			<!-- slider end -->
			
			<!-- product quick view popup start -->
			<div class="product-quick-view profile_view_1">
				<i class="fas fa-times hide-quick-view"></i>
				<div class="container">
					<div class="row">
						<div class="col-md-12 product-quick-view-main-box" >
							
							<div class="row">
								<!-- left part start -->
								<div class="col-md-6">
									<div class="product-main-img">
										<a href="product-details.php">
											<img src="images/product_4.jpg" class="img-fluid to-img1 ">
											<img src="images/9-1-170x185.jpg" class="img-fluid to-img2 ">
											<img src="images/product_1.png" class="img-fluid to-img3">
										</a>
									</div>

									<!-- bottom image select start -->
									<div class="row product-bottom-img-row produc-quick-view-img">
										<div class="col-md-4 col-4">
											<img src="images/product_4.jpg" class="img-fluid for-img1">
											<i class="fas fa-caret-up caret-one"></i>
										</div>
										<div class="col-md-4 col-4">
											<img src="images/9-1-170x185.jpg" class="img-fluid for-img2" >
											<i class="fas fa-caret-up caret-two"></i>
										</div>
										<div class="col-md-4 col-4">
											<img src="images/product_1.png" class="img-fluid for-img3">
											<i class="fas fa-caret-up caret-three"></i>
										</div>
									</div>
									<!-- bottom image select end -->
								</div>
								<!-- left part end -->

								<!-- right part start -->
								<div class="col-md-6">
									<div class="product-quick-view-right">
										<h2 class="quick-view-heading">black grape</h2>

										<!-- review start -->
										<div class="row">
											<div class="col-md-6 col-6 product-quick-view-right-left">
												<ul>
													<li>
														<a href=""><i class="fas fa-star"></i></a>
													</li>
													<li>
														<a href=""><i class="fas fa-star"></i></a>
													</li>
													<li>
														<a href=""><i class="fas fa-star"></i></a>
													</li>
													<li>
														<a href=""><i class="fas fa-star"></i></a>
													</li>
													<li>
														<a href=""><i class="fas fa-star"></i></a>
													</li>
												</ul>
											</div>
											<div class="col-md-6 col-6">
												<p>122 reviews</p>
											</div>
										</div>
										<!-- review end -->

										<!-- avaiablity and stock start -->
										<div class="row available">
											<div class="col-md-6 col-6">
												<h2>availablity : </h2>
											</div>
											<div class="col-md-6 col-6">
												<h2>in stock</h2>
											</div>
										</div>
										<!-- avaiablity and stock end -->

										<!-- price row start -->
										<div class="row">
											<div class="col-md-12">
												<h2 class="quick-view-heading">240.00 tk/kg</h2>
											</div>
										</div>
										<!-- price row end -->

										<!-- description row start -->
										<div class="row">
											<div class="col-md-12">
												<h2 >description</h2>
											</div>
											<div class="col-md-12">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
											</div>
										</div>
										<!-- description row end -->

									</div>
								</div>
								<!-- right part end -->

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- product quick view popup  end -->

		</div>
		<!-- latest product row end -->

	</div>
</section>
<!-- shop page main section end -->


<?php
include"include/footer.php";
?>