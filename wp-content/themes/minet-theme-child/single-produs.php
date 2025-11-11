<?php get_header(); ?>
<main class="produs">

    <?php if (!empty(get_the_content())): ?>
        <section class="sc1">
            <div class="center-info container h-align">
                <div class="info"><?php the_content(); ?></div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (get_field('a_visibility') == true): ?>
        <?php $about1 = (object)[
            'title' => get_field('a_title'),
            'image' => get_field('a_image'),
            'info' => get_field('a_description'),
            'word' => get_field('a_words')['word'],
        ];
        get_template_part('template-parts/general/general', 'right-image-left-content', $about1); ?>
    <?php endif; ?>

    <?php if (get_field('tc_visibility') == true): ?>
        <?php $three_columns = (object)[
            'slider' => get_field('three_columns_screens'),
        ];
        get_template_part('template-parts/general/product', 'three-columns', $three_columns); ?>
    <?php endif; ?>

    <?php if (get_field('iat_visibility') == true): ?>
        <?php $icons = (object)[
            'title' => get_field('iat_title'),
            'icons' => get_field('iat'),
        ];
        get_template_part('template-parts/general/product', 'icons-and-text', $icons); ?>
    <?php endif; ?>

    <?php if (get_field('features_visibility') == true): ?>
        <?php $features = (object)[
            'title' => get_field('features_title'),
            'icons' => get_field('features_icons'),
            'info' => get_field('features_info'),
        ];
        get_template_part('template-parts/general/product', 'icons', $features); ?>
    <?php endif; ?>

    <?php if (get_field('delivery_visibility') == true): ?>
        <?php $delivery = (object)[
            'title' => get_field('delivery_title'),
            'icons' => get_field('delivery_icons'),
        ];
        get_template_part('template-parts/general/product', 'icons', $delivery); ?>
    <?php endif; ?>

    <?php if (get_field('ia_visibility') == true): ?>
        <?php $iapplications = (object)[
            'title' => get_field('ia_title'),
            'applications' => get_field('industrial_applications'),
        ];
        get_template_part('template-parts/general/product', 'applications', $iapplications); ?>
    <?php endif; ?>

    <?php if (get_field('gw_visibility') == true): ?>
        <?php $gw = (object)[
            'info' => get_field('gw_info'),
            'image' => get_field('gw_image'),
        ];
        get_template_part('template-parts/general/product', 'green-screen', $gw); ?>
    <?php endif; ?>

    <?php if (get_field('psi_visibility') == true):
        if (!empty(get_field('product_slider_info'))) get_template_part('template-parts/general/general', 'applications-slider', get_field('product_slider_info'));
    endif; ?>

    <?php if (get_field('faq_visibility') == true): ?>
        <?php $faq = (object)[
            'title' => get_field('faq_title'),
            'faq' => get_field('faq'),
        ];
        get_template_part('template-parts/general/general', 'faq', $faq); ?>
    <?php endif; ?>

    <?php if (get_field('ti_visibility') == true): ?>
        <?php
        $ti_buttons = get_field('ti_button'); // ACF group with first and second button subfields
        $technology = (object)[
            'title' => get_field('ti_title'),
            'info'  => get_field('ti_info'),
            'buttons' => $ti_buttons,
        ];
        get_template_part('template-parts/general/general', 'technology-applications', $technology);
        ?>
    <?php endif; ?>

</main>
<?php get_footer(); ?>