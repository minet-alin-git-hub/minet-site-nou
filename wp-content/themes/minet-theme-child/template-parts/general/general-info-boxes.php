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
            <?php if(!empty($value['link'])): ?>
                <a href="<?php echo esc_url($value['link']['url']); ?>" target="<?php echo esc_attr($value['link']['target']); ?>">
                <span><?php echo esc_html($value['link']['title']); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M13 5l7 7-7 7M5 12h14" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
