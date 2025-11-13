<footer>
	<div class="footer-top container">
		<div class="footer-top-left">
			<?php
			if (!empty(get_field('logo', 'options')))
				echo '<a href="/">' . wp_get_attachment_image(get_field('logo', 'options')['ID'], '', '', array('class' => 'logo', 'alt' => 'minet-logo')) . '</a>';
			?>
		</div>
		<div class="footer-top-right">
			<div class="footer-column">
				<h4>Aplicații</h4>
				<ul>
					<li><a href="#">Automotive</a></li>
					<li><a href="#">Constructii</a></li>
					<li><a href="#">Confectii</a></li>
					<li><a href="#">Igiena</a></li>
					<li><a href="#">Mobila</a></li>
					<li><a href="#">Bedding</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<h4>Produse</h4>
				<ul>
					<li><a href="#">Automotive</a></li>
					<li><a href="#">Constructii</a></li>
					<li><a href="#">Confectii</a></li>
					<li><a href="#">Igiena</a></li>
					<li><a href="#">Mobila</a></li>
					<li><a href="#">Bedding</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<h4>Tehnologii</h4>
				<ul>
					<li><a href="#">Automotive</a></li>
					<li><a href="#">Constructii</a></li>
					<li><a href="#">Confectii</a></li>
					<li><a href="#">Igiena</a></li>
					<li><a href="#">Mobila</a></li>
					<li><a href="#">Bedding</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom container">
		<div class="footer-bottom-left">
			<p>&copy; <?php echo date('Y'); ?> MINET S.A.</p>
		</div>
		<div class="footer-bottom-right footer-socials">
			<a href="https://www.linkedin.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/linkedin.svg" alt="LinkedIn"></a>
			<a href="https://www.xing.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/xing.svg" alt="Xing"></a>
			<a href="https://www.youtube.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/youtube.svg" alt="YouTube"></a>
			<a href="https://www.instagram.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/instagram.svg" alt="Instagram"></a>
			<a href="https://www.facebook.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/facebook.svg" alt="Facebook"></a>
		</div>
	</div>
</footer>
<?php get_template_part('template-parts/general/general', 'svg'); ?>
<?php wp_footer(); ?>
</body>

</html>