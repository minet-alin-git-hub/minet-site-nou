<?php get_header(); ?>
<main class="aplicatie">

    <?php if (!empty(get_the_content())): ?>
        <section class="sc1">
            <div class="center-info container h-align">
                <div class="info"><?php the_content(); ?></div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty(get_field('application_info'))) get_template_part('template-parts/general/general', 'applications-slider', get_field('application_info')); ?>

    <?php if (isset(get_field('technology_info')['title']) || isset(get_field('technology_info')['info'])): ?>
        <?php $techology = (object)[
            'title' => get_field('technology_info')['title'],
            'info' => get_field('technology_info')['info'],
            'button' => get_field('technology_info')['button'],
        ];
        get_template_part('template-parts/general/general', 'technology-applications', $techology); ?>
    <?php endif; ?>

</main>
<?php get_footer(); ?>
<?php get_footer(); ?>