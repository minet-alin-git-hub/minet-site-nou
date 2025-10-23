<div class="lirc">
  <div class="container">
    <div class="flex-row">
      <div class="flex-item item50 image_item figure-shadow">
        <?php if(!empty($args->image)) echo wp_get_attachment_image($args->image['id'], '','',array('class'=>'img-abs', 'alt'=>$args->image['title'] )) ; ?>
        <?php if(!empty($args->word)) echo '<div class="stroke" data-inviewport="stroke"><p data-text="'.$args->word.'">'.$args->word.'</p></div>'; ?>
      </div>
      <div class="flex-item item50 info_item">
        <?php if(!empty($args->title)): ?>
          <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
        <?php endif; ?>
        <?php if(!empty($args->info)) echo '<div class="info">'.$args->info.'</div>'; ?>
      </div>
    </div>
  </div>
</div>
