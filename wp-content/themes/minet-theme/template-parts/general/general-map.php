<section class="map">
  <div class="container">
    <div class="flex-row">
      <div class="flex-item item50 map_info">
        <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
        <?php if(!empty($args->subtitle)) echo '<h3 class="red"><strong>'.$args->subtitle.'</strong></h3>'; ?>
        <?php if(!empty($args->info)) echo '<div class="info">'.$args->info.'</div>'; ?>
      </div>
      <div class="flex-item item50 map_container">
        <?php if(!empty($args->map)) echo $args->map; ?>
        <?php if(!empty($args->word)) echo '<div class="stroke" data-inviewport="stroke"><p  data-text="'.$args->word.'">'.$args->word.'</p></div>'; ?>
      </div>
    </div>
  </div>
</section>
