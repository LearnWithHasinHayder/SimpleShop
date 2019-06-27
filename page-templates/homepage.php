<?php
/**
 * Template Name: Homepage
 */
get_header();

?>

<?php get_template_part( 'template-parts/homepage/banner' ); ?>
    <main class="site-main">
		<?php get_template_part( 'template-parts/homepage/product-category' ); ?>
		<?php get_template_part( 'template-parts/homepage/products' ); ?>
		<?php get_template_part( 'template-parts/homepage/promo' ); ?>
		<?php get_template_part( 'template-parts/homepage/popular-product' ); ?>
		<?php get_template_part( 'template-parts/common/offer' ); ?>
		<?php get_template_part( 'template-parts/common/flickr' ); ?>
    </main>

<?php get_footer(); ?>