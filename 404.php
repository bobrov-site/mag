<?php

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section class="hero-screen" style="background: linear-gradient(0deg,rgba(0,0,0,.4),rgba(0,0,0,.4)) ,url(<?php echo get_template_directory_uri() . '/assets/dist/img/pages/main-page/hero-screen/hero-bg.jpg'; ?>) center center; background-size: cover;">
				<?php get_template_part('templates/components/header-transparent'); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumbs">
					            <?php
					            if (function_exists('yoast_breadcrumb') ) {
						            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					            }
					            ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="title-page">
					            <?php
					            if (is_archive()) {
						            single_term_title();
					            }
					            else {
						            the_title();
					            }
					            ?>
                            </h1>
                            <h2 class="title-section dark-section">
		                        <?php esc_attr_e('Ошибка 404! Данной страницы не существует. Вернитесь на главную'); ?>
                            </h2>
                            <a class="text-white" href="<?php echo home_url(); ?>">На главную</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
