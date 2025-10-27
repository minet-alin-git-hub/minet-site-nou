
		<footer>
			<div class="container h-align">
				<?php if(!empty(get_field('logo', 'options'))) echo '<a href="/">'.wp_get_attachment_image(get_field('logo', 'options')['ID'], '', '', array('class'=>'logo', 'alt'=>'minet-logo')).'</a>'; ?>
				<?php if(!empty(get_field('copy', 'options'))) echo '<p class="copy">© MINET '.get_the_date('Y').'. '.get_field('copy', 'options').'</p>'; ?>
			</div>
		</footer>
		<?php get_template_part('template-parts/general/general', 'svg'); ?>
		<?php wp_footer(); ?>
		<!-- if dns prefetch include third-party code here -->

	</body>
</html>
