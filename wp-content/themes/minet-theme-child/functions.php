<?php
function child_enqueue_styles() {
    // Load parent theme styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Industrial / Rugged font options (with 800 weight):

    // 1. Oswald – strong, condensed sans-serif
    wp_enqueue_style( 'font-oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700;800&display=swap', false );

    // 2. Anton – heavy, bold industrial headline (only one weight available, behaves like 800)
    wp_enqueue_style( 'font-anton', 'https://fonts.googleapis.com/css2?family=Anton&display=swap', false );

    // 3. Roboto Slab – geometric serif, professional
    wp_enqueue_style( 'font-roboto-slab', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700;800&display=swap', false );

    // 4. Archivo – modern, versatile industrial body text
    wp_enqueue_style( 'font-archivo', 'https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;700;800&display=swap', false );

    // Monospace / technical fonts:

    // 5. Share Tech Mono – mechanical monospace (single weight)
    wp_enqueue_style( 'font-share-tech-mono', 'https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap', false );

    // 6. IBM Plex Mono – professional technical monospace
    wp_enqueue_style( 'font-ibm-plex-mono', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600;700;800&display=swap', false );

    // 7. Fira Code – developer favorite monospace
    wp_enqueue_style( 'font-fira-code', 'https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700;800&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );
