<section class="values h-align">
  <div class="container">
    <ul class="values_screen row">
      <?php foreach ($args->values as $key => $value): ?>
        <li class="value_item item item49">
          <div class="image">
            <?php if(!empty($value['image'])) echo wp_get_attachment_image($value['image']['id'], '','',array('class'=>'img-abs', 'alt'=>$value['image']['title'] )) ; ?>
            <?php if(!empty($value['label'])): ?><div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $value['label']; ?></h2></div><?php endif; ?>
          </div>
          <?php if(!empty($value['description'])) echo '<div class="info">'.$value['description'].'</div>'; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php if(!empty($args->info)) echo '<p class="info info-l-button">'.$args->info.'</p>'; ?>
  </div>
</section>
