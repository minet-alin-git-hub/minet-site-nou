<?php get_header(); ?>
<main class="aplicatie">

    <?php if (!empty(get_the_content())): ?>
        <section class="sc1">
            <div class="center-info container h-align">
                <div class="info"><?php the_content(); ?></div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty(get_field('application_info'))): ?>
        <?php get_template_part('template-parts/general/general', 'applications-slider', get_field('application_info')); ?>
    <?php endif; ?>

    <?php if ($tech = get_field('technology_info')): ?>
        <?php
        $tech_data = (object)[
            'title' => $tech['title'] ?? '',
            'info' => $tech['info'] ?? '',
            'button' => $tech['button'] ?? [],
            'blocks' => $tech['block_content'] ?? []
        ];
        get_template_part('template-parts/general/general', 'technology-applications', $tech_data);
        ?>
    <?php endif; ?>

</main>
<?php get_footer(); ?>