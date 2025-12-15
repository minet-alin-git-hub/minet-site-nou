<?php
$args = isset($args) && is_object($args) ? $args : (object) [];

$tabs = get_field('ti_tabs');
$title = isset($args->title) ? $args->title : '';
$info = isset($args->info) ? $args->info : '';

$buttons = isset($args->buttons) && is_array($args->buttons) ? $args->buttons : [];
$first_link = isset($buttons['link']) ? esc_url($buttons['link']) : '';
$first_label = isset($buttons['label']) ? esc_html($buttons['label']) : '';
$second_link = isset($buttons['link_2']) ? esc_url($buttons['link_2']) : '';
$second_label = isset($buttons['label_2']) ? esc_html($buttons['label_2']) : '';
$third_link = isset($buttons['link_3']) ? esc_url($buttons['link_3']) : '';
$third_label = isset($buttons['label_3']) ? esc_html($buttons['label_3']) : '';
$fourth_link = isset($buttons['link_4']) ? esc_url($buttons['link_4']) : '';
$fourth_label = isset($buttons['label_4']) ? esc_html($buttons['label_4']) : '';
$fifth_link = isset($buttons['link_5']) ? esc_url($buttons['link_5']) : '';
$fifth_label = isset($buttons['label_5']) ? esc_html($buttons['label_5']) : '';
?>

<?php if (!empty($title) || !empty($tabs)): ?>
    <section class="technology_applicatons one_image_screen h-align">
        <div class="container">
            <div class="box figure-shadow">

                <div>
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/technical_specifications.png?nocache=1'); ?>" alt="Technical Specifications">

                    <?php if (!empty($title)): ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($info)): ?>
                        <p><?php echo esc_html($info); ?></p>
                    <?php endif; ?>
                </div>

                <?php
                $has_tabs = false;
                foreach ($tabs as $row) {
                    if (!empty($row['tab_title']) || !empty($row['tab_content'])) {
                        $has_tabs = true;
                        break;
                    }
                }
                ?>

                <?php if ($has_tabs): ?>
                    <div class="tabs-container">
                        <ul class="tabs-nav">
                            <?php $i = 0;
                            foreach ($tabs as $row):
                                if (empty($row['tab_title']) && empty($row['tab_content'])) continue; ?>
                                <li class="<?php echo $i === 0 ? 'active' : ''; ?>" data-tab="tab-<?php echo $i; ?>">
                                    <?php echo esc_html($row['tab_title']); ?>
                                </li>
                            <?php $i++;
                            endforeach; ?>
                        </ul>
                        <div class="tabs-content">
                            <?php $i = 0;
                            foreach ($tabs as $row):
                                if (empty($row['tab_title']) && empty($row['tab_content'])) continue; ?>
                                <div class="tab-pane <?php echo $i === 0 ? 'active' : ''; ?>" id="tab-<?php echo $i; ?>">
                                    <?php echo wp_kses_post($row['tab_content']); ?>
                                </div>
                            <?php $i++;
                            endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>


                <div class="buttons">
                    <?php if ($first_link && $first_label): ?>
                        <a href="<?php echo $first_link; ?>" class="btn default-btn"><span><?php echo $first_label; ?></span></a>
                    <?php endif; ?>
                    <?php if ($second_link && $second_label): ?>
                        <a href="<?php echo $second_link; ?>" class="btn default-btn"><span><?php echo $second_label; ?></span></a>
                    <?php endif; ?>
                    <?php if ($third_link && $third_label): ?>
                        <a href="<?php echo $third_link; ?>" class="btn default-btn"><span><?php echo $third_label; ?></span></a>
                    <?php endif; ?>
                    <?php if ($fourth_link && $fourth_label): ?>
                        <a href="<?php echo $fourth_link; ?>" class="btn default-btn"><span><?php echo $fourth_label; ?></span></a>
                    <?php endif; ?>
                    <?php if ($fifth_link && $fifth_label): ?>
                        <a href="<?php echo $fifth_link; ?>" class="btn default-btn"><span><?php echo $fifth_label; ?></span></a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <svg data-inViewport="vector-inviewport" class="vector" width="475px" height="288px">
            <use xlink:href="#minet-big-vector"></use>
        </svg>
    </section>
<?php endif; ?>