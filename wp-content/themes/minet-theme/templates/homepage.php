<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<main class="hp">

  <?php $fs = (object)[
    'banner'=>get_field('fs_image'),
    'title'=>get_field('fs_title'),
    'info'=>get_field('fs_info'),
  ]; get_template_part('template-parts/header/header', 'banner-homepage', $fs); ?>

  <?php if(get_field('ia_visibility') == true): ?>
    <?php $iapplications = (object)[
      'title'=>get_field('ia_title'),
      'applications'=>get_field('industrial_applications'),
      'words'=>get_field('ia_words'),
    ]; get_template_part('template-parts/general/homepage', 'applications', $iapplications) ; ?>
  <?php endif; ?>

  <?php if(get_field('numbers_visibility') == true):
  $numbers = (object)[
    'image'=>get_field('numbers_logo'),
    'numbers'=>get_field('numbers'),
  ];
  get_template_part('template-parts/general/general', 'numbers', $numbers); endif;
  ?>

  <?php if(get_field('au_screen_visibility') == true): ?>
    <section class="hp_about_us">
      <?php $about1 = (object)[
        'title'=>get_field('au_title'),
        'image'=>get_field('au_image'),
        'info'=>get_field('au_description'),
        'word'=>get_field('au_words')['second_words'],
      ]; get_template_part('template-parts/general/general', 'left-image-right-content', $about1) ; ?>

      <?php if(get_field('au_second_row_visibility') == true): ?>
      <?php $about2 = (object)[
        'image'=>get_field('au_second_image'),
        'info'=>get_field('au_second_description'),
        'word'=>get_field('au_words')['first_word'],
        'button'=>get_field('au_button'),
      ]; get_template_part('template-parts/general/general', 'right-image-left-content', $about2) ; ?>

      <?php endif; ?>
    </section>
  <?php endif; ?>

  <?php if(get_field('map_screen_visibility') == true):
  $map = (object)[
    'images'=>get_field('map_images'),
    'words'=>get_field('map_words'),
  ];
  get_template_part('template-parts/general/general', 'hp-map', $map); endif;
  ?>

</main>
<?php get_footer(); ?>
