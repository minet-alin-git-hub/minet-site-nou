<section class="history_screen">
  <div class="container">
    <div class="section__title left_title" data-inviewport="section-title"><svg width="74px" height="45px"><use xlink:href="#section-title"></use></svg><h2 class="section-title"><?php echo $args->title; ?></h2></div>
    <div class="history_list">
      <?php $i = 0;
            $nrYears = count($args->history);
        foreach ($args->history as $key => $value):
          if ($i % 4 === 0): ?>
          <div class="wrapper flex-row">
        <?php endif; ?>
          <div class="item" style="animation-delay:<?php echo ($key + 1) * 500; ?>ms; ">
            <div class="fade" style="animation-delay:<?php echo $key * 500; ?>ms;">
              <p class="year"><?php echo $value['year']; ?></p>
              <p class="info"><?php echo $value['description']; ?></p>
            </div>
            <?php if ($i % 2 === 0): ?>
               <div class="line" style="animation-delay:<?php echo ($i % 8 < 4) ? ($key + 1) * 500 : $key * 500; ?>ms;"></div>
             <?php else: ?>
               <div class="line" style="animation-delay:<?php echo ($i % 8 < 4) ? ($key + 1) * 500 : $key * 500; ?>ms;"></div>
             <?php endif; ?>
          </div>
        <?php $i++;
         if ($i % 4 === 0):
           if($i < $nrYears): ?>
              <svg data-delay="<?php echo $key; ?>" id="side-line" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="125.5px" height="138.5px">
                <path class="path pathLine3"  d="M-1049.500,1.500 L70.500,1.500 C99.771,1.500 123.500,25.229 123.500,54.500 L123.500,83.500 C123.500,112.771 99.771,136.500 70.500,136.500 L-1049.500,136.500 C-1078.771,136.500 -1102.500,112.771 -1102.500,83.500 L-1102.500,54.500 C-1102.500,25.229 -1078.771,1.500 -1049.500,1.500 Z"></path>
              </svg>
          <?php endif; ?>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
