<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_template_part('templates/components/hero-screen-post') ?>
			<?php get_template_part('templates/templates/post-content') ?>
			<?php get_template_part('templates/components/our-products-action') ?>
			<?php get_template_part('templates/components/contact-form'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

