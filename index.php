<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero-screen" style="background: url(<?php echo get_template_directory_uri() . '/assets/dist/img/pages/main-page/hero-screen/slider.png' ?>)">
	            <?php get_template_part('templates/components/header-transparent'); ?>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();