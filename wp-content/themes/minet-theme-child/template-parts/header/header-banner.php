<div class="header-banner add_inviewport_class">
    <?php if (!empty(get_post_thumbnail_id($post->ID))) {
        $featuredImage = get_post_thumbnail_id($post->ID);
    } else {
        $featuredImage = get_field('banner_fallback', 'options')['ID'];
    } ?>

    <?php if (!empty(get_field('custom_title', $post->ID))) {
        $title = get_field('custom_title', $post->ID);
    } else {
        $title = get_the_title($post->ID);
    } ?>

    <?php echo wp_get_attachment_image($featuredImage, 'full', '', array('class' => 'img-abs', 'alt' => $post->ID)); ?>
    <h1 class="main-title"><?php echo $title; ?></h1>
</div>