<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_template_part('templates/components/hero-screen') ?>
            <?php get_template_part('templates/pages/contacts/components/requisites'); ?>
			<?php get_template_part('templates/components/contact-form'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();