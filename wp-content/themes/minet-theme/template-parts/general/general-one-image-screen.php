<?php if(!empty($args)): ?>
<section class="one_image_screen h-align">
  <div class="container">
    <figure class="one_image figure-shadow"><?php echo wp_get_attachment_image($args['id'], '','',array('class'=>'img-abs', 'alt'=>$args['title'] )) ; ?></figure>
  </div>
  <svg data-inViewport="vector-inviewport" class="vector" width="475px" height="288px"><use xlink:href="#minet-big-vector"></use></svg>
</section>
<?php endif; ?>
