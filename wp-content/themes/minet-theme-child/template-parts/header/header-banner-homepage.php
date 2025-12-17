<section class="homepage-banner add_inviewport_class" style="<?php
                                                                if (!empty($args->banner)) {
                                                                    $featuredImage = $args->banner['ID'];
                                                                } else {
                                                                    $featuredImage = get_field('banner_fallback', 'options')['ID'];
                                                                }
                                                                $bgImage = wp_get_attachment_image_url($featuredImage, 'full');
                                                                echo esc_attr("background: linear-gradient(270deg,transparent 0,#1b1b1b 80%), url('{$bgImage}'); background-size: cover; background-position: center;");
                                                                ?>">
    <div class="container">
        <div class="box">
            <?php
            if (!empty($args->title)) {
                $title = $args->title;
            } else {
                $title = get_the_title($post->ID);
            }
            ?>
            <h1 class="main-title red"><?php echo $title; ?></h1>
            <?php if (!empty($args->info)) echo '<p class="info black">' . $args->info . '</p>'; ?>
            <a href="http://192.168.11.39/minet-site-nou/contact/" class="hero-cta-button">Vorbește cu un specialist</a>
            <a href="http://192.168.11.39/minet-site-nou/contact/" class="hero-cta-scroll-button">Vezi mai mult</a>
        </div>
    </div>
</section>