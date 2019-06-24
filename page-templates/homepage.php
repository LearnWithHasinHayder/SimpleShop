<?php
/**
 * Template Name: Homepage
 */
get_header();

?>
	<!--hero section start-->
	<div id="home">
		<section class="hero js_full_height base-gradient- " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpg');">
			<div class="hero-content">
				<div class="container">
					<div class="row">
						<div class="col-md-5" data-wow-duration="2s" data-wow-delay="1s">
							<h1 class="hero-title">Olive color winter jacket
								for ladies
							</h1>
							<a href="#" class="hero-link">Winter Fashion</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--hero section end-->

	<main class="site-main">
		<!--shop category start-->
		<section class="space-3">
			<div class="container sm-center">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2 class="title"> Shop By Category</h2>
						</div>
					</div>

					<div class="col-md-12">
						<?php echo do_shortcode("[product_categories columns=3]"); ?>
					</div>
				</div>
			</div>
		</section>
		<!--shop category end-->

		<!--product section start-->
		<section class="space-3 space-adjust">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="section-title text-center">
							<h2 class="title ">New Arrival</h2>
							<div class="sub-title">37 New fashion products arrived recently in our showroom for this
								winter
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<ul class="products columns-3">



							<li class="product type-product post-17 status-publish instock product_cat-accessories has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p1.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="onsale">Sale!</span>
								<span class="price">
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        45.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        42.00
                                    </span>
                                </ins>

                            </span>
							</li>
							<li class="product">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p2.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product last">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p3.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p4.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p5.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product last">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p6.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p7.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p8.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product last">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p9.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<!--default woocommerce markup-->
							<!--<li class="product">
							<a href="#" class="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p12.jpg" alt="">
								<h2 class="woocommerce-loop-product__title">Vneck Tshirt</h2>

								<span class="price">
									<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">$</span>18.00</span>
								</span>
							</a>
							<a href="#" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="38" data-product_sku=""
								   aria-label="Add “Vneck Tshirt” to your cart" rel="nofollow">
								Add to cart
							</a>
						</li>-->
						</ul>
						<a href="#" class="view-all-product mt-md-5">View All Products</a>
					</div>

				</div>
			</div>
		</section>
		<!-- product section end-->

		<!--promo section start-->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="promo-box space-3">
							<div class="promo-img rounded bg-overlay" data-overlay="1"
							     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/sb.jpg);"></div>
							<div class="container">
								<div class="row justify-content-center align-items-center text-center">
									<div class="col-md-8">
										<!-- heading -->
										<h2 class="text-white mb-0 promo-title">
											Sale
										</h2>
										<h3 class="text-white promo-sub-title mt-0">Up to 50% off</h3>

										<a href="#" class="promo-link">in store and online</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!--promo section end-->

		<!--product section start-->
		<section class="space-3">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="section-title text-center">
							<h2 class="title ">Popular Product</h2>
							<!--<div class="sub-title">37 New fashion products arrived recently in our showroom for this-->
							<!--winter-->
							<!--</div>-->
						</div>
					</div>

					<div class="col-md-12">
						<ul class="products columns-3">
							<li class="product">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p10.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p11.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
							<li class="product last">
								<div class="product-wrap">
									<a href="#" class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p12.jpg" alt="">
									</a>
									<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
										<i class="fa fa-shopping-basket"></i>
									</a>
								</div>
								<div class="woocommerce-product-title-wrap">
									<h2 class="woocommerce-loop-product__title">
										<a href="#">Stitched leather sports shoe</a>
									</h2>
									<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
								</div>
								<span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                    </span>
                                </span>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</section>
		<!-- product section end-->

		<!--offer section start-->
		<section class="space-3 space-adjust">
			<div class="container ">
				<div class="row no-gutters text-center">
					<div class="col-md-4">
						<div class="offer-box border p-5">
							<i class="bi bi-delivery-van"></i>
							<h5 class="font-weight-bold mt-3 mb-0">Free Shipping</h5>
							<p class="mb-0">On all order over $39.00</p>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="offer-box border p-5 border-adjust">
							<i class="bi bi-delivery-van"></i>
							<h5 class="font-weight-bold mt-3 mb-0">30 Days Return</h5>
							<p class="mb-0">Money back Guarantee</p>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="offer-box border p-5">
							<i class="bi bi-delivery-van"></i>
							<h5 class="font-weight-bold mt-3 mb-0">Secure Checkout</h5>
							<p class="mb-0">100% Protected by paypal</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--offer section end-->

		<!--flickr section start-->
		<section class="">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="section-title text-center">
							<h2 class="title ">SimpleShop on Flickr</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="flickr-list">
				<a href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/s1.jpg')"></a>
				<a href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sb.jpg')"></a>
				<a href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/s2.jpg')"></a>
				<a href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/s3.jpg')"></a>
				<a href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/s4.jpg')"></a>
				<a href="#" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/s5.jpg')"></a>
			</div>
		</section>
		<!-- flickr section end-->
	</main>

<?php get_footer(); ?>