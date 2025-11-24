<?php if (!empty($args->title) || !empty($args->info)): ?>
    <section class="technology_applicatons one_image_screen h-align">
        <div class="container">
            <div class="box figure-shadow">
                <?php if (!empty($args->title)): ?><h2><?php echo $args->title; ?></h2><?php endif; ?>
                <?php if (!empty($args->info)): ?><p class="info"><?php echo $args->info; ?></p><?php endif; ?>

                <?php
                $buttons = $args->buttons;
                $first_link = $buttons['link'] ?? '';
                $first_label = $buttons['label'] ?? '';
                $second_link = $buttons['second_button_link'] ?? '';
                $second_label = $buttons['second_button_label'] ?? '';
                ?>

                <div>
                    <?php if ($first_link && $first_label): ?>
                        <a href="<?php echo $first_link; ?>" class="btn default-btn"><span><?php echo $first_label; ?></span></a>
                    <?php endif; ?>
                    <?php if ($second_link && $second_label): ?>
                        <a href="<?php echo $second_link; ?>" class="btn default-btn"><span><?php echo $second_label; ?></span></a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <svg data-inViewport="vector-inviewport" class="vector" width="475px" height="288px">
            <use xlink:href="#minet-big-vector"></use>
        </svg>
    </section>
<?php endif; ?>
<!-- Fila este pt produse si/sau aplicatii !!!!!!!!!!!!!!!!!!!!!!! -->
<!-- Fila este pt produse si/sau aplicatii !!!!!!!!!!!!!!!!!!!!!!! -->
<!-- Fila este pt produse si/sau aplicatii !!!!!!!!!!!!!!!!!!!!!!! -->