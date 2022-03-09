<?php
$term = get_term_by('name', single_term_title('', false), 'news_categories');
$image = carbon_get_term_meta($term->term_id, 'crb_image');
$url = wp_get_attachment_url($image);
?>


<section class="hero-screen" style="background: linear-gradient(0deg,rgba(0,0,0,.4),rgba(0,0,0,.4)) ,url(<?php echo $url;?>) center center; background-size: cover;">
	<?php get_template_part('templates/components/header-transparent'); ?>
	<?php get_template_part('templates/components/breadcrumbs') ?>
</section>