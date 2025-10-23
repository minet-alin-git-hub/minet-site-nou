<?php if(!empty($args->title) || !empty($args->info)): ?>
<section class="technology_applicatons one_image_screen h-align">
  <div class="container">
    <div class="box figure-shadow">
      <?php if(!empty($args->title)): ?><h2><?php echo $args->title; ?></h2><?php endif; ?>
      <?php if(!empty($args->info)): ?><p class="info"><?php echo $args->info; ?></p><?php endif; ?>
      <?php if(!empty($args->button['link'])): ?><div><a href="<?php echo $args->button['link']; ?>" class="btn default-btn"><span><?php echo $args->button['label']; ?></span></a></div><?php endif; ?>
    </div>
  </div>
  <svg data-inViewport="vector-inviewport" class="vector" width="475px" height="288px"><use xlink:href="#minet-big-vector"></use></svg>
</section>
<?php endif; ?>
