<header id="masthead" class="site-header transparent header-white">
	<nav class="navbar navbar-expand-xl navbar-light">
		<div class="container-fluid container-xl">
            <a href="<?php echo home_url(); ?>" class="custom-logo-link" rel="home">
                <img width="261" height="43" class="custom-logo" src="<?php echo wp_get_attachment_url(304) ?>" alt="Монолит Агро Групп">
            </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'container' => false,
					'menu_class' => '',
					'fallback_cb' => '__return_false',
					'items_wrap' => '<ul id="%1$s" class="navbar-nav nav-pills me-auto %2$s">%3$s</ul>',
					'depth' => 2,
					'walker' => new bootstrap_5_wp_nav_menu_walker()
				));
				?>
				<a href="tel:<?php echo '+7 (962) 444-40-53' ?>" class="navbar-number">
					+7 (962) 444-40-53
				</a>
				<a href="#contact-form" class="navbar-callback">
					<div class="navbar-callback-icon"></div>
					<span class="navbar-callback-text">
                                    Заказать звонок
                                </span>
				</a>
			</div>
		</div>
	</nav>
</header><!-- #masthead -->
