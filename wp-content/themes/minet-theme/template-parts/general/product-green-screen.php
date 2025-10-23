<section class="green-screen">
  <div class="row">
    <div class="container">
      <div class="green_box h-align figure-shadow">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/green.png" alt="green-vector"/>
        <div class="info"><?php echo $args->info; ?></div>
      </div>
    </div>
    <svg data-inViewport="vector-inviewport" class="vector" width="475px" height="288px"><use xlink:href="#minet-big-vector-green"></use></svg>
  </div>
  <?php if(!empty($args->image)): ?>
    <div class="container"><figure class="figure"><?php echo wp_get_attachment_image($args->image['id'], 'article-listing','',array('class'=>'img-abs', 'alt'=>$args->image['title'] )) ; ?></figure></div>
  <?php endif; ?>
</section>
