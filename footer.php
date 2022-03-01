
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <img src="<?php echo get_template_directory_uri() . '/assets/src/img/components/footer/logo.png'?>">
                </div>
                <div class="col-xl-2">
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
                </div>
                <div class="col-xl-3">
                    <div class="footer-address">
                        <div class="address-info">
                            <h4 class="address-info-title">
                                Главный офис:
                            </h4>
                            <p class="address-info-text">
                                г. Михайловск 356245 <br>
                                ул. Вокзальная 22 <br>
                                2 этаж, каб 14 <br>
                            </p>
                        </div>
                        <div class="address-info">
                            <h4 class="address-info-title">
                                Наше производство:
                            </h4>
                            <p class="address-info-text">
                                г. Ставрополь 355044 <br>
                                пр. Кулакова, 18
                            </p>
                        </div>
                        <div class="address-info">
                            <h4 class="address-info-title">
                                График работы:
                            </h4>
                            <p class="address-info-text">
                                ПН-ПТ с 9:00 до 17:00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl d-flex justify-content-end">
                    <a href="tel:+7 (962) 444-40-53" class="footer-number">
                        +7 (962) 444-40-53
                    </a>
                    <div class="callback-and-social">
                        <div class="callback">
                            <a class="btn btn-primary" href="#form">
                                <div class="callback-icon"></div>
                                <span class="callback-text">
                                    Заказать звонок
                                </span>
                            </a>
                        </div>
                        <div class="socials d-flex justify-content-end">
                            <a class="social-link" href="https://www.instagram.com/mag_official_ru/">
                                <img class="social-icon" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/footer/instagram.svg'?>" alt="instagram">
                            </a>
                            <a class="social-link" href="https://www.youtube.com/channel/UCN9A0uLBBE-7c83rDxkOqLw">
                                <img class="social-icon" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/footer/youtube.svg'?>" alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl">
                    <span class="copyright">
                        © 2022 ООО “МАГ”
                    </span>
                </div>
                <div class="col-xl">
                    <a class="developer" href="taplink.cc/bobrov_site">
                        Сайт разработал Бобров Даниил
                    </a>
                </div>
                <div class="col-xl">
                    <a class="privacy-policy" href="<?php get_the_privacy_policy_link(); ?>">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
