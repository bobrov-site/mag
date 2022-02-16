<header id="masthead" class="site-header transparent">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid container-xl">
			<?php echo get_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--            //TODO Custom Menu -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <!--            //TODO Active item -->
                        <a class="nav-link active" aria-current="page" href="#">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Производство</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Дилеры</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            О компании
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">О нас</a></li>
                            <li><a class="dropdown-item" href="#">Контакты</a></li>
                            <li><a class="dropdown-item" href="#">Галерея</a></li>
                            <li><a class="dropdown-item" href="#">Лизинг</a></li>
                        </ul>
                    </li>
                </ul>
                <!--            //TODO ACF Number -->
                <a href="tel:<?php echo '+7 (962) 444-40-53' ?>" class="navbar-number">
                    +7 (962) 444-40-53
                </a>
                <a href="#form" class="navbar-callback">
                    <div class="navbar-callback-icon"></div>
                    <span class="navbar-callback-text">
                                    Заказать звонок
                                </span>
                </a>
            </div>
        </div>
    </nav>
</header><!-- #masthead -->