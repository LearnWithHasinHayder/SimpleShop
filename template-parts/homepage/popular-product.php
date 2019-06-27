<?php
if ( get_theme_mod( 'simpleshop_homepage_display_popular', true ) ):
?>
<!--product section start-->
<section class="space-3">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-8">
				<div class="section-title text-center">
					<h2 class="title "><?php echo get_theme_mod('simpleshop_homepage_popular_title',__('Popular products','simpleshop')) ?></h2>
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
<?php endif; ?>