<section class="numbers h-align">
  <?php if(!empty($args->image)): ?>
    <figure><?php echo wp_get_attachment_image($args->image['id'], '','',array('class'=>'', 'alt'=>$args->image['title'] )) ; ?></figure>
  <?php endif; ?>
  <div class="container">
    <?php if(!empty($args->numbers)): ?>
    <div class="numbers_container clear">
      <?php foreach ($args->numbers as $number): ?>
        <div class="number_item">
          <p class="number"><span class="count"><?php echo $number['number']; ?></span></p>
          <p class="text"><?php echo $number['text']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

</section>
