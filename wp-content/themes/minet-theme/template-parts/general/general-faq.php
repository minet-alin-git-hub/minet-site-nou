<section class="faq">
  <div class="container">
    <?php if(!empty($args->title)): ?><div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div><?php endif; ?>
    <ul class="faq_list">
      <?php foreach ($args->faq as $key => $value): ?>
        <li class="faq_item">
          <h3><?php echo $value['question']; ?></h3>
          <div class="info"><?php echo $value['answer']; ?></div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
