<section class="homepage-banner add_inviewport_class">
    <?php if (!empty($args->banner)) {
        $featuredImage = $args->banner['ID'];
    } else {
        $featuredImage = get_field('banner_fallback', 'options')['ID'];
    } ?>

    <?php if (!empty($args->title)) {
        $title = $args->title;
    } else {
        $title = get_the_title($post->ID);
    } ?>

    <?php echo wp_get_attachment_image($featuredImage, 'full', '', array('class' => 'img-abs', 'alt' => $post->ID)); ?>
    <div class="container">
        <div class="box">
            <h1 class="main-title red"><?php echo $title; ?></h1>
            <?php if (!empty($args->info)) echo '<p class="info black">' . $args->info . '</p>'; ?>
        </div>
    </div>
</section>