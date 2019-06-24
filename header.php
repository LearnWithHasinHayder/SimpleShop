<?php wp_head(); ?>
<body class="archive  woocommerce">

<!--header start-->
<header class="app-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-expand-lg mainmenu">
					<!--logo-->
					<a class="navbar-brand mr-5 text-dark float-left" href="index.html">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo@2x.png 2x" alt=""/>
					</a>
					<!--logo-->

					<!--responsive toggle icon-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
					        data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
					        aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"> </i>
                            </span>
					</button>
					<!--responsive toggle icon-->

					<!--search start-->
					<div id="form-search" class="form-search">
						<div class="input-group">
							<input type="search" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
                                <button id="form-search-close-btn" class="btn" type="button">
                                    <span class="svg svg--cross">
                                        <svg class="svg__icon" width="32px" height="32px" viewBox="0 0 32 32">
                                            <path d="M16.7,16L31.9,0.9c0.2-0.2,0.2-0.5,0-0.7s-0.5-0.2-0.7,0L16,15.3L0.9,0.1C0.7,0,0.3,0,0.1,0.1S0,0.7,0.1,0.9L15.3,16
                                            L0.1,31.1c-0.2,0.2-0.2,0.5,0,0.7C0.2,32,0.4,32,0.5,32s0.3,0,0.4-0.1L16,16.7l15.1,15.1c0.1,0.1,0.2,0.1,0.4,0.1s0.3,0,0.4-0.1
                                            c0.2-0.2,0.2-0.5,0-0.7L16.7,16z"/>
                                        </svg>
                                    </span>
                                </button>
                            </span>
						</div>
					</div>
					<!--search end-->
					<!--nav link-->
					<div class="collapse navbar-collapse" id="navbarsExampleDefault">
						<ul id="menu" class="navbar-nav ml-auto">
							<li class=""><a href="index.html" class="">Home</a></li>
							<li class=""><a href="product-list-filter.html" class="">Shop List</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								   aria-haspopup="true" aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="dropdown">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
										   aria-haspopup="true" aria-expanded="false">Product Single Layouts</a>
										<ul class="dropdown-menu">
											<li><a href="product-single-on-sale.html">Product Single - On Sale </a></li>
											<li><a href="product-single-group.html">Product Single - Group</a></li>
											<li><a href="product-single-variable.html">Product Single - Variable</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
										   aria-haspopup="true" aria-expanded="false">Shop Pages</a>
										<ul class="dropdown-menu">
											<li><a href="cart.html">Cart </a></li>
											<li><a href="checkout.html">Checkout </a></li>
											<li><a href="order-process.html">Order Process </a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
										   aria-haspopup="true" aria-expanded="false">My Account</a>
										<ul class="dropdown-menu">
											<li><a href="my-account-dashbord.html">My Account - Dashboard </a></li>
											<li><a href="my-account-order.html">My Account - Order </a></li>
											<li><a href="my-account-downloads.html">My Account - Downloads </a></li>
											<li><a href="my-account-ac-details.html">My Account - Account Details </a>
											</li>
											<li><a href="login-registration.html">Login / Registration </a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								   aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="error.html">404 Error</a></li>
								</ul>
							</li>
							<li><a href="contact-us.html">Contact Us</a></li>
							<li><a href="#" class="" id="search-icon"><i class="fa fa-search"></i></a></li>
							<li><a href="#" class=""><i class="fa fa-user"></i></a></li>
							<!--<li><a href="#" class="" ><i class="fa fa-shopping-basket"></i></a></li>-->
							<li class="dropdown mini-cart" style="display: none;">
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								   aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-basket"></i><span
										class="cart-quantity-highlighter">2</span></a>
								<ul class="dropdown-menu dropdown-menu-right widget_shopping_cart_content woocommerce-mini-cart cart_list product_list_widget ">
									<li class="woocommerce-mini-cart-item mini_cart_item">
										<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item"
										   data-product_id="180" data-cart_item_key="045117b0e0a11a242b9765e79cbf113f"
										   data-product_sku="9015-DF-1">×</a> <a class="mini_cart_item-image"
										                                         href="https://stockie.colabr.io/demo1/shop/gosta-leather-chair/">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p1.jpg"
											     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
										</a>
										<div class="mini_cart_item-desc">
											<a class="font-titles" href="#">Trendy Cloth</a>
											<span class="woo-c_product_category">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/p1.jpg" rel="tag">Cloth</a>
                                                </span>

											<span class="quantity">1 × <span class="woocs_special_price_code"><span
														class="woocommerce-Price-amount amount">56.00<span
															class="woocommerce-Price-currencySymbol">$</span></span></span></span>
										</div>
									</li>
									<li class="woocommerce-mini-cart-item mini_cart_item">
										<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item"
										   data-product_id="18907" data-cart_item_key="91726a6e8c9faa2bb5f26d442a59c203"
										   data-product_sku="9015-DF-2">×</a> <a class="mini_cart_item-image"
										                                         href="https://stockie.colabr.io/demo1/shop/stoppade-plastic-chair/">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/p2.jpg"
											     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
										</a>
										<div class="mini_cart_item-desc">
											<a class="font-titles" href="#">Warm Sweater</a>
											<span class="woo-c_product_category">
                                                    <a href="#" rel="tag">Stools</a></span>
											<span class="quantity">1 × <span class="woocs_special_price_code"><span
														class="woocommerce-Price-amount amount">97.00<span
															class="woocommerce-Price-currencySymbol">$</span></span></span></span>
										</div>
									</li>
									<li class="woocommerce-mini-cart-item mini_cart_item">
										<div class="woocomerce-mini-cart__container">
											<p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong>
												<span class="woocs_special_price_code"><span
														class="woocommerce-Price-amount amount">153.00<span
															class="woocommerce-Price-currencySymbol">$</span></span></span>
											</p>
											<p class="woocommerce-mini-cart__buttons buttons">
												<a href="#" class="button wc-forward">View cart</a>
												<a href="#" class="button checkout wc-forward">Checkout</a>
											</p>
										</div>
									</li>
								</ul>

							</li>
						</ul>

					</div>
					<!--nav link-->


				</nav>


			</div>
		</div>
	</div>

</header>
<!--header end-->