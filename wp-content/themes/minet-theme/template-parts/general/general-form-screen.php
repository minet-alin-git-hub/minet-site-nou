<section class="form_screen" id="form">
  <div class="container">
    <?php if(!empty($args->image)): ?>
      <figure><?php echo wp_get_attachment_image($args->image['id'], 'article-listing','',array('class'=>'', 'alt'=>$args->image['title'] )) ; ?></figure>
    <?php endif; ?>
    <?php if(!empty($args->title)): ?>
      <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
    <?php endif; ?>
    <?php if(!empty($args->form)): ?>
      <div class="form">
        <?php if(!empty($args->info)): ?><p><?php echo $args->info; ?></p><?php endif; ?>
        <?php echo do_shortcode('[contact-form-7 id="'.$args->form.'"]'); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
