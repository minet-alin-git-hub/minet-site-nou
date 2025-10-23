<section class="applications">
  <div class="container applicattions_slider_container">
    <?php if(count($args) > 1): ?><div class="slider-arrow prev-arrow"><svg><use xlink:href="#arrow"></use></svg></div><?php endif; ?>
    <div class="applicattions_slider">
      <?php foreach ($args as $key => $value): ?>
        <div class="applications_item" data-title="<?php echo $value['title']; ?>">
          <?php $image = $value['image']; if(!empty($image)) echo wp_get_attachment_image($image['id'], '','',array('class'=>'img-abs', 'alt'=>$image['title'] )) ; ?>
          <div class="info_box">
            <?php if(!empty($value['title'])) echo '<h2>'.$value['title'].'</h2>'; ?>
            <?php if(!empty($value['info'])) echo '<p>'.$value['info'].'</p>'; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if(count($args) > 1): ?><div class="slider-arrow next-arrow"><svg><use xlink:href="#arrow"></use></svg></div><?php endif; ?>
  </div>
  <?php echo '<div class="stroke" data-inviewport="stroke"><p data-text="'.$post->post_title.'">'.$post->post_title.'</p></div>'; ?>
</section>
