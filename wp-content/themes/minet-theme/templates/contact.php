<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<main class="contact_page">

  <?php if(!empty(get_the_content())): ?>
  <section class="sc1">
    <div class="center-info container h-align">
      <div class="info"><?php the_content(); ?></div>
    </div>
  </section>
  <?php endif; ?>

  <?php if(get_field('gc_screen_visibility') == true)
  $info_list = (object)[
    'title'=>get_field('gc_title'),
    'list'=>get_field('gc_info_list'),
  ];
  get_template_part('template-parts/general/general', 'info-boxes', $info_list);
  ?>

  <?php if(get_field('sc_screen_visibility') == true)
  $sales = (object)[
    'title'=>get_field('sc_title'),
    'persons'=>get_field('sales_contacts'),
  ];
  get_template_part('template-parts/general/general', 'contact-persons', $sales);
  ?>

  <?php if(get_field('sc_screen_visibility') == true)
  $cs = (object)[
    'title'=>get_field('cs_title'),
    'persons'=>get_field('cs_contacts'),
  ];
  get_template_part('template-parts/general/general', 'contact-persons', $cs);
  ?>

  <?php if(get_field('map_screen_visibility') == true)
    $map = (object)[
      'title'=>get_field('map_title'),
      'subtitle'=>get_field('map_subtitle'),
      'info'=>get_field('map_info'),
      'map'=>get_field('map'),
      'word'=>get_field('map_words')['word']
    ]; get_template_part('template-parts/general/general', 'map', $map);
  ?>


  <?php if(get_field('cf_screen_visibility') == true) : ?>
    <?php $form = (object)[
      'title'=>get_field('cf_title'),
      'form'=>get_field('cf_form'),
    ]; get_template_part('template-parts/general/general', 'form-screen', $form); ?>
  <?php endif; ?>

</main>
<?php get_footer(); ?>
