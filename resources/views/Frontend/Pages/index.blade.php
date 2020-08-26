@include('Frontend.include.header')
@include('Frontend.include.topbar')
@include('Frontend.include.navbar')
@include('Frontend.include.navbar-dropdown')




<!-- banner section start -->
<section class="banner">
	<div class="container">
		<div class="row banner-row">
			
			<!-- carousel start -->
			<div class="banner-carousel owl-carousel owl-theme">
   		 		
				<!-- banner item start -->
   		 		<div class="item">
   		 			<div class="col-md-12">
   		 				<div class="row">
   		 					<!-- left part start -->
							<div class="col-md-6">
								<div class="banner-left">
									<h1>Fresh fruit & grocery</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									<a href="">we are the best</a>
								</div>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<div class="col-md-6">
								<div class="banner-right">
									
									<img src="{{ asset("frontend/images/banner.png")}}" class="img-fluid">

								</div>
							</div>
							<!-- right part end -->
   		 				</div>
   		 			</div>
   		 		</div>
   		 		<!-- banner item end -->

   		 		<!-- banner item start -->
   		 		<div class="item">
   		 			<div class="col-md-12">
   		 				<div class="row">
   		 					<!-- left part start -->
							<div class="col-md-6">
								<div class="banner-left">
									<h1>Fresh fruit & grocery</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									<a href="">we are the best</a>
								</div>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<div class="col-md-6">
								<div class="banner-right">
									
									<img src="{{ asset("frontend/images/banner.png")}}" class="img-fluid">
								</div>
							</div>
							<!-- right part end -->
   		 				</div>
   		 			</div>
   		 		</div>
   		 		<!-- banner item end -->

   		 		<!-- banner item start -->
   		 		<div class="item">
   		 			<div class="col-md-12">
   		 				<div class="row">
   		 					<!-- left part start -->
							<div class="col-md-6">
								<div class="banner-left">
									<h1>Fresh fruit & grocery</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									<a href="">we are the best</a>
								</div>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<div class="col-md-6">
								<div class="banner-right">
									<img src="{{ asset("frontend/images/banner.png")}}" class="img-fluid">

								</div>
							</div>
							<!-- right part end -->
   		 				</div>
   		 			</div>
   		 		</div>
   		 		<!-- banner item end -->

   		 	</div>
			<!-- carousel end -->

		</div>
	</div>
</section>
<!-- banner section end -->


<!-- product section start -->
<section class="home-product section-padding">
	<div class="container-fluid">
		
		<!-- row start -->
		<div class="row">
			
			<!-- left part start -->
			<div class="col-md-3">
				<div class="home-product-left-image">
					
					<img src="{{ asset("frontend/images/banner-product-left-01.jpg")}}" class="img-fluid">

				</div>

				<!-- support 24/7 start -->
				<div class="home-product-left">
					<div class="home-product-left-info">
						<div class="row">
							<div class="col-md-2">
								
								<img src="{{ asset("frontend/images/247.png")}}" class="img-fluid">
								
							</div>

							<div class="col-md-10">
								<h2>Support 24/7</h2>
								<p>Contact us 24 hours a day, 7 days a week</p>
							</div>
						</div>
					</div>
				</div>
				<!-- support 24/7 end -->

				<!-- fast shipping start -->
				<div class="home-product-left fast-shipping">
					<div class="home-product-left-info">
						<div class="row">
							<div class="col-md-2">
								
								<img src="{{ asset("frontend/images/shipping.png")}}" class="img-fluid">

							</div>

							<div class="col-md-10">
								<h2>Fast shipping</h2>
								<p>We will deliver your goods to  anywhere in the world</p>
							</div>
						</div>
					</div>
				</div>
				<!-- fast shipping end -->

				<!-- refund start -->
				<div class="home-product-left">
					<div class="home-product-left-info">
						<div class="row">
							<div class="col-md-2">
								
								<img src="{{ asset("frontend/images/refund.png")}}" class="img-fluid">

							</div>

							<div class="col-md-10">
								<h2>Refund Guarantee</h2>
								<p>We will refund your money if the goods are of poor quality</p>
							</div>
						</div>
					</div>
				</div>
				<!-- refund end -->

			</div>
			<!-- left part end -->

			<!-- middle part start -->
			<div class="col-md-8">
				
				<!-- home page product category row start -->
				<div class="row">
					<div class="home-page-product-cart-carousel owl-carousel owl-theme">
						@foreach(App\Category::where('parent_id', 0)->get() as $category)
							
						
						<!-- category item start -->
    					<div class="item">
    						<a>
								<div class="col-md-12">
								
									<img src="{{ asset("images/category/".$category->icon_image)}}" class="img-fluid">

								</div>
							</a>
						<p>{{$category->name}}</p>
    					</div>
						<!-- category item end -->
						@endforeach
						
						

    				</div>
				</div>
				<!-- home page product category row end -->

				<!-- filtering item row start -->
				<div class="row home-product-filtering">
					<div class="col-md-12">
						<ul>
							<span class="select-filter active-filter f1" id="f1">
								<li class="filter-category  one" id="one">new arrivals</li>
							</span>
							<span class="select-filter  f3" id="f3">
								<li class="filter-category three" id="three">best seller</li>
							</span>
						</ul>
					</div>
				</div>
				<!-- filtering item row end -->

				<!-- filter wise product show start new arrivals-->
				<div class="row filter-product-list  one">
					
					<!-- product item start -->
					<div class="col-md-3 col-6 product-hover">
						<div class="product-item-01">
							<div class="product-hover-item">
								<p>-15%</p>
								<a href="">
									
									<img src="{{ asset("frontend/images/wishlist.png")}}" class="img-fluid">

								</a>
								<a class="show-product-popup" id="profile_view_1">
									<i class="fas fa-eye"></i>
								</a>
							</div>

							<!-- main thumbnail -->
							
							<img src="{{ asset("frontend/images/12-1-170x185.jpg")}}" class="img-fluid">
							<!-- main thumbnail -->

							<!-- go product details -->
							<a href="">
								<p>Organic Broccoli</p>
								<span>280.99 Tk</span>
							</a>
							<!-- go product details -->
							
							<div class="product-item-cart">
								<a href="">
									<img src="{{ asset("frontend/images/cart-bag.png")}}" class="img-fluid">

									 add to bag
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
													<img src="{{ asset("frontend/images/product_4.jpg")}}" class="img-fluid">
													<img src="{{ asset("frontend/images/9-1-170x185.jpg")}}" class="img-fluid">
													<img src="{{ asset("frontend/images/product_1.png")}}" class="img-fluid">

													
												</a>
											</div>

											<!-- bottom image select start -->
											<div class="row product-bottom-img-row produc-quick-view-img">
												<div class="col-md-4 col-4">
													<img src="{{ asset("frontend/images/product_4.jpg")}}" class="img-fluid">

													
													<i class="fas fa-caret-up caret-one"></i>
												</div>
												<div class="col-md-4 col-4">
													<img src="{{ asset("frontend/images/9-1-170x185.jpg")}}" class="img-fluid">

												
													<i class="fas fa-caret-up caret-two"></i>
												</div>
												<div class="col-md-4 col-4">
													<img src="{{ asset("frontend/images/product_1.png")}}" class="img-fluid">

													
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
				<!-- filter wise product show end new arrivals-->

				<!-- filter wise product show start new best seller-->
				<div class="row filter-product-list hide-item three">
					
					<!-- product item start -->
					<div class="col-md-3 col-6 product-hover">
						<div class="product-item-01">
							<div class="product-hover-item">
								<p>-15%</p>
								<a href="">
									
									<img src="{{ asset("frontend/images/wishlist.png")}}" class="img-fluid">

								</a>
								<a class="show-product-popup" id="profile_view_1">
									<i class="fas fa-eye"></i>
								</a>
							</div>

							<!-- main thumbnail -->
							
							<img src="{{ asset("frontend/images/12-1-170x185.jpg")}}" class="img-fluid">

							<!-- main thumbnail -->

							<!-- go product details -->
							<a href="">
								<p>Organic Broccoli</p>
								<span>280.99 Tk</span>
							</a>
							<!-- go product details -->
							
							<div class="product-item-cart">
								<a href="">
									<img src="{{ asset("frontend/images/cart-bag.png")}}" class="img-fluid">

								 add to bag
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
													<img src="{{ asset("frontend/images/product_4.jpg")}}" class="img-fluid to-img1">
													<img src="{{ asset("frontend/images/9-1-170x185.jpg")}}" class="img-fluid to-img2">
													<img src="{{ asset("frontend/images/product_1.png")}}" class="img-fluid to-img3">

													
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
				<!-- filter wise product show end new best seller-->

			</div>
			<!-- middle part end -->

			<!-- right part start -->
			<div class="col-md-1">
				<div class="home-product-right-image">
					
					<img src="{{ asset("frontend/images/01_Home_amrubazar scroll.png")}}" class="img-fluid ">

				</div>
			</div>
			<!-- right part end -->

		</div>
		<!-- row END -->

	</div>
</section>
<!-- product section end -->


<!-- feature banner start -->
<section class="feature-banner" style="background-image: url('{{ asset('frontend/images/slider2.jpg') }}') " >
	
	<div class="container">
		<div class="row">
			<div class="col-md-12"></div>
		</div>
	</div>
</section>
<!-- feature banner end -->


<!-- feature product start  -->
<section class="featre-product section-padding">
	<div class="container">
		<div class="row">
			
			<!-- left part start -->
			<div class="col-md-8">
				<div class="row">
					
					<!-- product item start -->
					<div class="col-md-3 col-6 product-hover">
						<div class="product-item-01">
							<div class="product-hover-item">
								<p>-15%</p>
								<a href="">
									
									<img src="{{ asset("frontend/images/wishlist.png")}}" class="img-fluid ">

								</a>
								<a class="show-product-popup" id="profile_view_1">
									<i class="fas fa-eye"></i>
								</a>
							</div>

							<!-- main thumbnail -->
							<img src="{{ asset("frontend/images/12-1-170x185.jpg")}}" class="img-fluid ">

							<!-- main thumbnail -->

							<!-- go product details -->
							<a href="">
								<p>Organic Broccoli</p>
								<span>280.99 Tk</span>
							</a>
							<!-- go product details -->
							
							<div class="product-item-cart">
								<a href="">
									<img src="{{ asset("frontend/images/cart-bag.png")}}" >

									 add to bag
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
													<img src="{{ asset("frontend/images/product_4.jpg")}}" class="img-fluid to-img1">
													<img src="{{ asset("frontend/images/9-1-170x185.jpg")}}" class="img-fluid to-img2">
													<img src="{{ asset("frontend/images/product_1.png")}}" class="img-fluid to-img3">

												</a>
											</div>

											<!-- bottom image select start -->
											<div class="row product-bottom-img-row produc-quick-view-img">
												<div class="col-md-4 col-4">
													<img src="{{ asset("frontend/images/product_4.jpg")}}" class="img-fluid to-img1">

													<i class="fas fa-caret-up caret-one"></i>
												</div>
												<div class="col-md-4 col-4">
													<img src="{{ asset("frontend/images/9-1-170x185.jpg")}}" class="img-fluid to-img2">

													<i class="fas fa-caret-up caret-two"></i>
												</div>
												<div class="col-md-4 col-4">
													<img src="{{ asset("frontend/images/product_1.png")}}" class="img-fluid to-img2">

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
			</div>
			<!-- left part end -->

			<!-- right part start -->
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12 feature-thumbnail">
						<div class="product-item-02">
							
							<!-- main thumbnail -->
							<a href="">
								
								<img src="{{ asset("frontend/images/product_4.jpg")}}" class="img-fluid ">

							</a>
							<!-- main thumbnail -->

							<!--  product details -->
							<p>Organic Broccoli</p>
							<span>280.99 Tk</span>
							<!--  product details -->

							<div class="feature-product-hover">
								<a href="">
									<img src="{{ asset("frontend/images/cart-bag.png")}}" class="img-fluid ">

								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- right part end -->

		</div>
	</div>
</section>
<!-- feature product end  -->


<!-- sign up section start -->
<section class="signup-newsletter">
	<div class="container">
		<div class="row">
			
			<!--left part start -->
			<div class="col-md-6">
				<h2>Sign up for Newsletter</h2>
			</div>
			<!--left part end-->

			<!--right part start -->
			<div class="col-md-6">
				<form id="createAd" action="POST" method="multipart/form-data" class="signup-news-form">
					@csrf
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter your e-mail address" id="email" name="email">
					</div>
					<div class="form-group">
						<a href="" class="signup-newsletter-button" id="create">
							
							<img src="{{ asset("frontend/images/signup_newsletter.png")}}" class="img-fluid ">

						</a>
					</div>
				</form>
			</div>
			<!--right part end-->

		</div>
	</div>
</section>
<!-- sign up section end -->

@include('Frontend.include.footer')
