<?php if (!empty($args->title) || !empty($args->info) || !empty($args->button) || !empty($args->blocks)): ?>
    <section class="technology_applicatons one_image_screen h-align">
        <div class="container">
            <!-- <div class="box figure-shadow" style="background-color: red !important; background-image: url('http://192.168.11.39/minet-site-nou/wp-content/uploads/2025/11/gradient-background.jpg') !important;"> -->
            <div class="box figure-shadow">
                <?php if (!empty($args->title)): ?>
                    <h2><?php echo esc_html($args->title); ?></h2>
                <?php endif; ?>

                <?php if (!empty($args->info)): ?>
                    <p class="info"><?php echo $args->info; ?></p>
                <?php endif; ?>

                <?php if (!empty($args->button['link']) && !empty($args->button['label'])): ?>
                    <a href="<?php echo esc_url($args->button['link']); ?>" class="btn default-btn">
                        <?php echo esc_html($args->button['label']); ?>
                    </a>
                <?php endif; ?>

                <?php
                $ti_button = get_field('ti_button');

                if (!empty($ti_button['link']) && !empty($ti_button['label'])): ?>
                    <div class="custom-buttons">
                        <a href="<?php echo esc_url($ti_button['link']); ?>" class="btn default-btn">
                            <?php echo esc_html($ti_button['label']); ?>
                        </a>

                        <?php if (!empty($ti_button['second_button_link']) && !empty($ti_button['second_button_label'])): ?>
                            <a href="<?php echo esc_url($ti_button['second_button_link']); ?>" class="btn default-btn">
                                <?php echo esc_html($ti_button['second_button_label']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>



                <?php if (!empty($args->blocks)): ?>
                    <?php foreach ($args->blocks as $block): ?>
                        <?php
                        $block_class = 'block-' . sanitize_title($block['block_title']);
                        ?>
                        <div class="block-header <?php echo esc_attr($block_class); ?>">
                            <?php if (!empty($block['block_icon'])): ?>
                                <img src="<?php echo esc_url($block['block_icon']['url']); ?>" alt="<?php echo esc_attr($block['block_title']); ?>">
                            <?php endif; ?>

                            <?php if (!empty($block['block_title'])): ?>
                                <h3><?php echo esc_html($block['block_title']); ?></h3>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($block['block_text'])): ?>
                            <p class="info"><?php echo $block['block_text']; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($block['block_links'])): ?>
                            <div class="links-wrapper">
                                <span class="links-intro">Vezi și:</span>
                                <?php foreach ($block['block_links'] as $link):
                                    $url = is_array($link['url']) ? $link['url']['url'] : $link['url'];
                                    $target = !empty($link['target']) ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>">
                                        <?php echo esc_html($link['label']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <svg data-inViewport="vector-inviewport" class="vector" width="475px" height="288px">
            <use xlink:href="#minet-big-vector"></use>
        </svg>
    </section>
<?php endif; ?>