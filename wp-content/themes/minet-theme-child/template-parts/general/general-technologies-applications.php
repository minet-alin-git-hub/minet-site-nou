<?php if (!empty($args->title) || have_rows('ti_tabs')): ?>
    <section class="technology_applicatons one_image_screen h-align">
        <div class="container">
            <div class="box figure-shadow">

                <?php if (!empty($args->title)): ?>
                    <h2><?php echo $args->title; ?></h2>
                <?php endif; ?>

                <?php if (have_rows('ti_tabs')): ?>
                    <div class="tabs-container">
                        <ul class="tabs-nav">
                            <?php $i = 0;
                            while (have_rows('ti_tabs')): the_row(); ?>
                                <li class="<?php echo $i === 0 ? 'active' : ''; ?>" data-tab="tab-<?php echo $i; ?>">
                                    <?php the_sub_field('tab_title'); ?>
                                </li>
                            <?php $i++;
                            endwhile; ?>
                        </ul>
                        <div class="tabs-content">
                            <?php $i = 0;
                            while (have_rows('ti_tabs')): the_row(); ?>
                                <div class="tab-pane <?php echo $i === 0 ? 'active' : ''; ?>" id="tab-<?php echo $i; ?>">
                                    <?php the_sub_field('tab_content'); ?>
                                </div>
                            <?php $i++;
                            endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php
                $buttons = $args->buttons;
                $first_link = $buttons['link'] ?? '';
                $first_label = $buttons['label'] ?? '';
                $second_link = $buttons['link_2'] ?? '';
                $second_label = $buttons['label_2'] ?? '';
                ?>

                <div class="buttons">
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