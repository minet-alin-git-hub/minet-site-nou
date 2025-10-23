<?php /* Template Name: About us */ ?>
<?php get_header(); ?>
<main class="about_us">

  <?php if(!empty(get_the_content())): ?>
  <section class="sc1">
    <div class="center-info container h-align">
      <div class="info"><?php the_content(); ?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if(get_field('company_visibility') == true): ?>
    <?php $about1 = (object)[
      'title'=>get_field('company_title'),
      'image'=>get_field('company_image'),
      'info'=>get_field('company_description'),
      'word'=>get_field('company_words')['second_words'],
    ]; get_template_part('template-parts/general/general', 'right-image-left-content', $about1) ; ?>
  <?php endif; ?>

  <?php if(get_field('values_visibility') == true): ?>
    <?php $values = (object)[
      'values'=>get_field('values'),
      'info'=>get_field('values_info'),
    ]; get_template_part('template-parts/general/about', 'values', $values) ; ?>
  <?php endif; ?>

  <?php if(get_field('responsability_visibility') == true): ?>
    <?php $responsability = (object)[
      'title'=>get_field('responsability_title'),
      'responsability'=>get_field('responsability'),
      'image'=>get_field('responsability_image'),
      'word'=>get_field('words'),
    ]; get_template_part('template-parts/general/about', 'responsability', $responsability) ; ?>
  <?php endif; ?>

  <?php if(get_field('history_visibility') == true): ?>
    <?php $history = (object)[
      'title'=>get_field('history_title'),
      'history'=>get_field('history'),
    ]; get_template_part('template-parts/general/about', 'history', $history) ; ?>
  <?php endif; ?>

</main>
<?php get_footer(); ?>
