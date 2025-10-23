<section class="applications_gallery">
  <div class="container">
    <?php if(!empty($args->title)): ?>
      <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
    <?php endif; ?>
  </div>
  <ul class="applications_gird">
    <?php foreach ($args->applications as $key => $value): ?>
    <li data-inViewport="zoomout" style="animation-delay:<?php echo ($key + 126) * 2200; ?>ms;" >
      <?php $image = $value['image']; if(!empty($image)) echo wp_get_attachment_image($image['id'], '','',array('class'=>'img-abs', 'alt'=>$image['title'] )) ; ?>
      <h3><?php echo $value['label']; ?></h3>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
