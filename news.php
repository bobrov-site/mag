<?php
/*
Template name: Мой Супер-шаблон
Template post type: page
*/
?>

<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('templates/components/hero-screen') ?>
		<?php get_template_part('templates/pages/news/news-grid'); ?>
		<?php get_template_part('templates/components/our-products-action') ?>
		<?php get_template_part('templates/components/contact-form'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
