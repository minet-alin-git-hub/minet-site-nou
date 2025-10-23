<section class="contact_persons">
  <div class="container">
    <?php if(!empty($args->title)): ?>
      <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
    <?php endif; ?>
    <?php if(!empty($args->persons)): ?>
      <ul class="persons_list clear">
        <?php foreach ($args->persons as $key => $value): ?>
          <li class="persons_item">
            <div class="inner">
              <figure class="one_image"><?php echo wp_get_attachment_image($value['image']['id'], '','',array('class'=>'img-abs', 'alt'=>$value['image']['title'] )) ; ?></figure>
              <p class="function"><strong><?php echo $value['function']; ?></strong></p>
              <h3 class="red"><?php echo $value['name']; ?></h3>
              <p><a href="callto:<?php echo $value['telephone']; ?>"><?php echo $value['telephone']; ?></a></p>
              <p><a href="mailto:<?php echo $value['email']; ?>"><?php echo $value['email']; ?></a></p>
            </div>
          </li>
          <?php if(count($args->persons) < 3 && $key === 1): ?>
            <li class="personas_item personas_vector">
              <svg data-inViewport="vector-inviewport" class="vector" width="475px" height="288px"><use xlink:href="#minet-big-vector"></use></svg>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>
