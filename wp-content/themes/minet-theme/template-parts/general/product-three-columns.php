<?php foreach ($args->slider as $key => $value): ?>
  <section class="product_three_columns">
    <div class="container">
      <?php if(!empty($value['title'])): ?><div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $value['title']; ?></h2></div><?php endif; ?>
      <div class="three_columns">
        <div class="item"><?php echo $value['column_one']; ?></div>
        <div class="item"><?php echo $value['column_two']; ?></div>
        <div class="item"><?php echo $value['column_three']; ?></div>
      </div>
    </div>
  </section>

<?php endforeach; ?>
