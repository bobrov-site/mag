<section class="get-requisites">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-md-7 col-lg-7 d-flex align-items-center">
                <div class="get-requisites-offer">
                    <h2 class="title-section dark-section">
                        Нужны реквизиты отдельным файлом?
                    </h2>
                    <p class="desc-section">
                        Скачайте нашу карту партнера в формате .doc нажав на кнопку  ниже
                    </p>
                    <a href="<?php the_field('file'); ?>" download class="btn btn-secondary btn-lg">
                        Получить реквизиты
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-md-5 col-lg-5">
                <div style="background: url('<?php echo get_template_directory_uri() . '/assets/dist/img/components/requisites/file.png' ?>') no-repeat" class="get-requisites-img"></div>
            </div>
        </div>
    </div>
    <img class="gradient-section" alt="gradient-" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/pages/requisites/gradient.svg'?>">
</section>
