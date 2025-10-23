<section class="hp_applications_gallery">
  <div class="container">
    <?php if(!empty($args->title)): ?>
      <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
    <?php endif; ?>
  </div>
  <div class="applications__container">
    <ul class="applications_gird">
      <?php foreach ($args->applications as $key => $value): ?>
      <li>
        <?php $image = $value['image']; if(!empty($image)) echo wp_get_attachment_image($image['id'], '','',array('class'=>'img-abs', 'alt'=>$image['title'] )) ; ?>
        <div class="flex-row">
          <div class="flex-item item50 title-item">
            <p class="number"><?php echo sprintf("%02d", ($key + 1)); ?></p>
            <h3><?php echo $value['title']; ?></h3>
          </div>
          <div class="flex-item item50 text-item">
            <p><?php echo $value['info']; ?></p>
            <?php if(!empty($value['button']['link'])): ?><a href="<?php echo $value['button']['link']; ?>" class="btn default-btn"><span><?php echo $value['button']['label']; ?></span></a><?php endif; ?>
          </div>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>

    <?php if(!empty($args->words)): ?>
    <div class="container words-container">
      <div class="stroke left_stroke" data-inviewport="stroke"><p data-text="<?php echo $args->words['first_word']; ?>"><?php echo $args->words['first_word']; ?></p></div>
      <div class="stroke right_stroke" data-inviewport="stroke"><p data-text="<?php echo $args->words['second_words']; ?>"><?php echo $args->words['second_words']; ?></p></div>
    </div>
    <?php endif; ?>
  </div>

</section>
