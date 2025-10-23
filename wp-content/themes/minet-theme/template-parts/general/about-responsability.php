<section class="responsability">
  <div class="container">
    <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
    <div class="responsability_row row">
      <div class="info_box">
        <?php foreach ($args->responsability as $key => $value): ?>
        <div class="tab">
          <?php if(!empty($value['title'])) echo '<h3>'.$value['title'].'</h3>'; ?>
          <?php if(!empty($value['info'])) echo '<div class="info">'.$value['info'].'</div>'; ?>
        </div>
        <?php endforeach; ?>
      </div>
      <?php $image = $args->image; if(!empty($image)) echo wp_get_attachment_image($image['id'], '','',array('class'=>'img-rel', 'alt'=>$image['title'] )) ; ?>
      <?php if(!empty($args->word)) echo '<div class="stroke" data-inviewport="stroke"><p data-text="'.$args->word.'">'.$args->word.'</p></div>'; ?>
    </div>
  </div>
</section>
