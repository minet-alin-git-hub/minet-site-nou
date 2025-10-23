<?php /* Template Name: Technology */ ?>
<?php get_header(); ?>
<main class="technology">

  <?php if(!empty(get_the_content())): ?>
  <section class="sc1">
    <div class="center-info container h-align">
      <div class="info"><?php the_content(); ?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if(get_field('image_screen_visibility') == true) get_template_part('template-parts/general/general', 'one-image-screen', get_field('image_screen_image')); ?>

  <?php if(get_field('info_screen_visibility') == true)
  $info_list = (object)[
    'list'=>get_field('info_list'),
  ];
  get_template_part('template-parts/general/general', 'info-boxes', $info_list); 
  ?>

</main>
<?php get_footer(); ?>
