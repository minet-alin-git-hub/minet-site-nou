<?php /* Template Name: Careers */ ?>
<?php get_header(); ?>
<main class="careers">

  <?php if(!empty(get_the_content())): ?>
  <section class="sc1">
    <div class="center-info container h-align">
      <div class="info"><?php the_content(); ?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if(get_field('image_screen_visibility') == true) get_template_part('template-parts/general/general', 'one-image-screen', get_field('image_screen_image')); ?>

  <?php if(get_field('form_screen_visibility') == true): ?>
    <?php $form = (object)[
      'image'=>get_field('form_screen_image'),
      'info'=>get_field('form_screen_info'),
      'form'=>get_field('form_screen_form'),
    ]; get_template_part('template-parts/general/general', 'form-screen', $form); ?>
  <?php endif; ?>

</main>
<?php get_footer(); ?>
