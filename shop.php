<?php
get_header();
get_template_part('template-parts/shop/banner');
?>
<div class="site-main">
	<!--product section start-->
	<section class="space-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-4 mb-lg-0">
					<?php
					while(have_posts()){
						the_post();
						the_content();
					}
					?>
				</div>
				<div class="col-lg-4 widget-area">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php
get_footer();
?>
