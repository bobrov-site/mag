<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_template_part('templates/components/hero-screen') ?>
            <?php get_template_part('templates/pages/dealers/components/dealer-invite') ?>
			<?php get_template_part('templates/pages/dealers/components/dealers') ?>
			<?php get_template_part('templates/pages/dealers/components/dealers-map') ?>
            \<?php get_template_part('templates/pages/dealers/components/dealers-blank') ?>
			<?php get_template_part('templates/components/contact-form'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
