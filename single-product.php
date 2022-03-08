<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_template_part('templates/components/hero-screen-product') ?>
            <?php get_template_part('templates/pages/product/product') ?>
            <?php get_template_part('templates/pages/product/buy-with-product') ?>
            <?php get_template_part('templates/pages/product/details') ?>
            <?php get_template_part('templates/pages/product/benefits') ?>
			<?php get_template_part('templates/components/contact-form'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

