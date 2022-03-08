<?php
$details = carbon_get_post_meta(get_the_ID(), 'crb_points');
$bg = carbon_get_post_meta(get_the_ID(), 'crb_bg');
?>
<section class="details">
    <div class="details-img">
        <img src="<?php echo wp_get_attachment_url($bg) ?>" alt="<?php echo get_the_title($bg)?>">
        <?php foreach ($details as $detail) { ?>
        <div class="details-point-wrapper">
            <button class="details-point" style="top:<?php echo $detail['crb_top'] ?>; right:0; bottom:0; left: <?php echo $detail['crb_left'] ?>;" data-bs-toggle="modal" data-bs-target="#<?php echo $detail['crb_image'] ?>"></button>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="modal<?php echo $detail['crb_image'] ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $detail['crb_image'] ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo wp_get_attachment_url($detail['crb_image'])  ?>" alt="<?php echo get_the_title($detail['crb_image']) ?>">
                            <h3><?php echo $detail['crb_title'] ?></h3>
                            <p><?php echo $detail['crb_desc'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</section>
