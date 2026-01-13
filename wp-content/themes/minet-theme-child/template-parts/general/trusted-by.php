<?php
$title = get_field('trusted_by_title');
$subtitle = get_field('trusted_by_sub_title');

$row_1 = get_field('trusted_by_logos_1');
$row_2 = get_field('trusted_by_logos_2');
$row_3 = get_field('trusted_by_logos_3');
?>

<section class="trusted-by">
    <div>
        <div class="trusted-by-container">
            <div class="trusted-by-header">
                <?php if ($title): ?>
                    <h2 class="trusted-by-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
                <?php if ($subtitle): ?>
                    <p class="trusted-by-subtitle"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>

            </div>

            <div class="trusted-by-shades">
                <?php if (!empty($row_1)): ?>
                    <div class="logos-row logos-row-0">
                        <?php foreach ($row_1 as $item): ?>
                            <img src="<?php echo esc_url($item['logo']); ?>" alt="">
                        <?php endforeach; ?>
                        <?php foreach ($row_1 as $item): ?>
                            <img src="<?php echo esc_url($item['logo']); ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($row_2)): ?>
                    <div class="logos-row logos-row-1">
                        <?php foreach ($row_2 as $item): ?>
                            <img src="<?php echo esc_url($item['logo_2']); ?>" alt="">
                        <?php endforeach; ?>
                        <?php foreach ($row_2 as $item): ?>
                            <img src="<?php echo esc_url($item['logo_2']); ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($row_3)): ?>
                    <div class="logos-row logos-row-2">
                        <?php foreach ($row_3 as $item): ?>
                            <img src="<?php echo esc_url($item['logo_3']); ?>" alt="">
                        <?php endforeach; ?>
                        <?php foreach ($row_3 as $item): ?>
                            <img src="<?php echo esc_url($item['logo_3']); ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>