<?php if(!empty($args)): ?>
<section class="info_boxes_screen">
  <div class="container">
    <?php if(!empty($args->title)): ?>
      <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
    <?php endif; ?>
    <ul class="info_boxes">
      <?php foreach ($args->list as $key => $value): ?>
        <li>
          <h3 data-inViewport="changeColor" style="animation-delay:<?php echo $key*1000 / 2; ?>ms;" ><?php echo $value['title']; ?></h3>
          <div class="info"><?php echo $value['info']; ?></div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
