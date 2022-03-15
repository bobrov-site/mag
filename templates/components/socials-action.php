<section class="social-action">
    <div class="container">
        <div class="row flex-column-reverse flex-xl-row">
            <div class="col-xl-6 d-flex justify-content-center justify-content-xl-start align-items-center">
                <div class="offer">
                    <h2 class="title-section dark-section">
                        <?php
                        $post = get_post();
                        if ($post->ID == 27) {
                            echo 'Оставайтесь с нами на связи!';
                        }
                        else {
                            echo 'Понравился каталог?';
                        }
                        ?>
                        <br>
                        Следите за нами в социальных сетях!
                    </h2>
                    <p class="description">
                        Подпишитесь на наши социальные сети,
                        чтобы следить за последними обновлениями
                    </p>
                    <div class="social-buttons">
                        <a href="https://www.youtube.com/channel/UCN9A0uLBBE-7c83rDxkOqLw" class="btn btn-secondary btn-lg">Youtube</a>
                        <a href="https://www.instagram.com/mag_official_ru/" class="btn btn-secondary btn-lg">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div style="background: url('<?php echo get_template_directory_uri() . '/assets/dist/img/components/socials-action/socials.png' ?>')" class="social-icons"></div>
            </div>
        </div>
    </div>
    <img class="gradient-section" alt="gradient-products" src="<?php echo get_template_directory_uri() . '/assets/dist/svg/components/social-action/gradient.svg'?>">
</section>
