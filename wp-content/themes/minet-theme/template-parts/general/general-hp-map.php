<section class="hp_map">

  <?php if(!empty($args->images['desktop'])): ?>
  <div class="hp_map_container">
    <?php if(!empty($args->images['mobile'])): ?>
      <?php echo wp_get_attachment_image($args->images['mobile']['id'], '','',array('class'=>'img-abs mobile-img', 'alt'=>$args->images['mobile']['title'] )) ; ?>
    <?php else: ?>
      <?php echo wp_get_attachment_image($args->images['desktop']['id'], '','',array('class'=>'img-abs mobile-img', 'alt'=>$args->images['desktop']['title'] )) ; ?>
    <?php endif; ?>
    <?php echo wp_get_attachment_image($args->images['desktop']['id'], '','',array('class'=>'img-abs desktop-img', 'alt'=>$args->images['desktop']['title'] )) ; ?>

    <?php if(!empty($args->images['countries'])): ?>
      <p><?php echo $args->images['countries']; ?></p>
    <?php endif; ?>

  </div>
  <?php endif; ?>

  <?php if(!empty($args->words)): ?>
  <div class="container">
    <div class="stroke left_stroke" data-inviewport="stroke"><p data-text="<?php echo $args->words['first_word']; ?>"><?php echo $args->words['first_word']; ?></p></div>
    <div class="stroke right_stroke" data-inviewport="stroke"><p data-text="<?php echo $args->words['second_words']; ?>"><?php echo $args->words['second_words']; ?></p></div>
  </div>
  <?php endif; ?>
</section>
