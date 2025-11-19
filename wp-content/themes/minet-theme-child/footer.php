<footer>
	<div class="container">
		<div class="footer-main">
			<div class="footer-left">
				<?php
				if (!empty(get_field('logo', 'options')))
					echo '<a href="/">' . wp_get_attachment_image(get_field('logo', 'options')['ID'], '', '', array('class' => 'logo', 'alt' => 'minet-logo')) . '</a>';
				?>
				<ul class="footer-contact">
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/location.svg" alt="Location Icon">Strada Depozitelor nr. 12,</li>
					<li>Râmnicu Vâlcea, România.</li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/phone.svg" alt="Phone Icon">0350 401 710</li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/email.svg" alt="Email Icon">office@minet.ro</li>
				</ul>
				<a href="/contact" class="footer-contact-btn">Contact</a>
			</div>
			<div class="footer-right">
				<div class="footer-columns">
					<div class="footer-column">
						<h4>// Aplicații</h4>
						<ul>
							<li><a href="#">Automotive</a></li>
							<li><a href="#">Construcții</a></li>
							<li><a href="#">Confecții</a></li>
							<li><a href="#">Igienă</a></li>
							<li><a href="#">Mobilă</a></li>
							<li><a href="#">Produse Bedding</a></li>
							<li><a href="#">Saltele</a></li>
						</ul>
					</div>
					<div class="footer-column">
						<h4>// Produse</h4>
						<ul>
							<li><a href="#">Automotive</a></li>
							<li><a href="#">Geotextile</a></li>
							<li><a href="#">Șervețele Umede</a></li>
							<li><a href="#">Izolații Acustice - termice</a></li>
							<li><a href="#">Termice</a></li>
							<li><a href="#">Vate Voluminoase</a></li>
							<li><a href="#">Geosintetice</a></li>
						</ul>
					</div>
					<div class="footer-column">
						<h4>// Tehnologii</h4>
						<ul>
							<li><a href="#">Spunlace</a></li>
							<li><a href="#">Thermobonding</a></li>
							<li><a href="#">Needlepunch</a></li>
							<li><a href="#">Airlay</a></li>
							<li><a href="#">Conversion</a></li>
							<li><a href="#">Recycling</a></li>
							<li><a href="#">Research & Development</a></li>
						</ul>
					</div>
					<div class="footer-column">
						<h4>// Companie</h4>
						<ul>
							<li><a href="#">Misiunea noastră</a></li>
							<li><a href="#">Cariere</a></li>
							<li><a href="#">Imprint</a></li>
							<li><a href="#">Downloads</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Privacy Settings</a></li>
							<li><a href="#">Contact</a></li>


						</ul>
					</div>
				</div>
				<hr class="right-divider">
				<div class="footer-bottom">
					<div class="footer-copyright">
						<p>&copy; 1981 - 2025 Minet Company. | All rights reserved.</p>
					</div>
					<div class="footer-socials">
						<a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/linkedin.svg" alt="LinkedIn"></a>
						<a href="https://www.xing.com" target="_blank" aria-label="Xing"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/xing.svg" alt="Xing"></a>
						<a href="https://www.youtube.com" target="_blank" aria-label="YouTube"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/youtube.svg" alt="YouTube"></a>
						<a href="https://www.instagram.com" target="_blank" aria-label="Instagram"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/instagram.svg" alt="Instagram"></a>
						<a href="https://www.facebook.com" target="_blank" aria-label="Facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/facebook.svg" alt="Facebook"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php get_template_part('template-parts/general/general', 'svg'); ?>
<?php wp_footer(); ?>
</body>

</html>