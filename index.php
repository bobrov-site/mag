<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
<!--            //TODO ACF -->
            <section class="hero-screen" style="background: linear-gradient(0deg,rgba(0,0,0,.4),rgba(0,0,0,.4)) ,url(<?php echo get_template_directory_uri() . '/assets/dist/img/pages/main-page/hero-screen/hero-bg.jpg'?>) center center; background-size: cover;">
	            <?php get_template_part('templates/components/header-transparent'); ?>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();