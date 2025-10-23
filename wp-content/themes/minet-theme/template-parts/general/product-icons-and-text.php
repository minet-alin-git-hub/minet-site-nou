<section class="features_benefits icons_and_texts">
  <div class="container">
    <?php if(!empty($args->title)): ?><div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div><?php endif; ?>
    <?php if(!empty($args->icons)): ?>
    <ul class="icons_list">
      <?php foreach ($args->icons as $key => $value): ?>
        <li class="icons_item" data-inviewport="icons">
          <div class="inner" style="animation-delay:<?php echo ($key + 1) * 367; ?>ms; ">
            <figure><?php echo wp_get_attachment_image($value['icon']['id'], '','',array('class'=>'', 'alt'=>$value['icon']['title'] )) ; ?></figure>
            <p class="label"><strong><?php echo $value['label']; ?></strong></p>
            <p class="text"><?php echo $value['text']; ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
</section>
