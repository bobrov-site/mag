<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_template_part('templates/components/hero-screen') ?>
            <?php get_template_part('templates/pages/company/components/about') ?>
			<?php get_template_part('templates/components/benefits') ?>
			<?php get_template_part('templates/components/socials-action') ?>
            <?php get_template_part('templates/pages/company/components/certificates') ?>
			<?php get_template_part('templates/components/our-partners-action') ?>
			<?php get_template_part('templates/components/feedbacks') ?>
			<?php get_template_part('templates/components/our-products-action') ?>
			<?php get_template_part('templates/components/contact-form'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
