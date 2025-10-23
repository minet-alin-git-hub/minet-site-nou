<?php get_header(); ?>
	<section id="primary" class="content-area search-page">
		<main id="main" class="site-main container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					Rezultate pentru <strong><?php echo get_search_query(); ?></strong>
				</h1>
			</header>
			<div class="full-breaker">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/post', 'preview-medium-photo-loop' );
				// End the loop.
			endwhile;
			// Previous/next page navigation.
			ws_pagination();
			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );
		endif;
		?>
		</div>
		</main>
	</section>

<?php
get_footer(); ?>
