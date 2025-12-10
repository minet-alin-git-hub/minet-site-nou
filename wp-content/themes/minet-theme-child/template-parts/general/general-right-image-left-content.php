<div class="rilc">
    <div class="container">
        <div class="flex-row">
            <div class="flex-item item50 image_item figure-shadow">
                <?php if (!empty($args->image)) echo wp_get_attachment_image($args->image['id'], '', '', array('class' => 'img-abs', 'alt' => $args->image['title'])); ?>
            </div>
            <div class="flex-item item50 info_item">
                <?php if (!empty($args->title)): ?>
                    <div class="section__title right_title" data-inviewport="section-title">
                        <h2 class="section-title"><?php echo $args->title; ?></h2><svg width="74px" height="45px">
                            <use xlink:href="#section-title"></use>
                        </svg>
                    </div>
                <?php endif; ?>
                <?php if (!empty($args->info)) echo '<div class="info">' . $args->info . '</div>'; ?>
                <?php if (!empty($args->button['link'])): ?>
                    <a href="<?php echo $args->button['link']; ?>" class="btn default-btn"><span><?php echo $args->button['label']; ?></span></a>
                <?php endif; ?>
                <?php if (!empty($args->word)) echo '<div class="stroke" data-inviewport="stroke"><p data-text="' . $args->word . '">' . $args->word . '</p></div>'; ?>
            </div>
        </div>
    </div>
    <!-- <svg data-inViewport="vector" class="vector" width="475px" height="288px">
        <use xlink:href="#minet-big-vector-white"></use>
    </svg> -->
</div>