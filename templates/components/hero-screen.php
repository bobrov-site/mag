<?php $url = get_the_post_thumbnail_url(get_field('img_bg'), 'fullhd') ?>
<section class="hero-screen" style="background: linear-gradient(0deg,rgba(0,0,0,.4),rgba(0,0,0,.4)) ,url(<?php the_field('img_bg'); ?>) center center; background-size: cover;">
	<?php get_template_part('templates/components/header-transparent'); ?>
	<?php get_template_part('templates/components/breadcrumbs') ?>
</section>