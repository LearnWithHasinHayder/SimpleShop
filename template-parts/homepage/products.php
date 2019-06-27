<?php
if ( get_theme_mod( 'simpleshop_homepage_display_product', true ) ):
	?>
    <!--product section start-->
    <section class="space-3 space-adjust">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title "><?php echo get_theme_mod('simpleshop_homepage_product_title',__('New Arrival','simpleshop')) ?></h2>
                        <div class="sub-title"><?php echo get_theme_mod('simpleshop_homepage_product_subtitle') ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php echo do_shortcode('[products column=3]') ?>
                    <a href="#" class="view-all-product mt-md-5">View All Products</a>
                </div>

            </div>
        </div>
    </section>
    <!-- product section end-->
<?php endif; ?>