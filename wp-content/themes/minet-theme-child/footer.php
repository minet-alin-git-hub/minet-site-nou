<footer>
	<div class="container">	
		<div class="footer-columns">
			<div class="footer-left">
				<?php 
				if(!empty(get_field('logo', 'options'))) 
					echo '<a href="/">'.wp_get_attachment_image(get_field('logo', 'options')['ID'], '', '', array('class'=>'logo', 'alt'=>'minet-logo')).'</a>'; 
				?>
				<div class="footer-socials">
					<a href="https://www.linkedin.com" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/linkedin.svg" alt="LinkedIn">
					</a>
					<a href="https://www.xing.com" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/xing.svg" alt="Xing">
					</a>
					<a href="https://www.youtube.com" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/youtube.svg" alt="youtube">
					</a>
					<a href="https://www.instagram.com" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/instagram.svg" alt="Instagram">
					</a>
					<a href="https://www.facebook.com" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/facebook.svg" alt="facebook">
					</a>
				</div>
			</div>
			<div class="footer-center">
				<p>MINET S.A.<br>
				Strada Depozitelor, nr. 12<br>
				Râmnicu Vâlcea,<br>
				România<br><br>
				TELEFON:<br>
				0350 401 710<br>
				office@minet.ro</p>
			</div>
			<div class="footer-right">
				<ul>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Imprint</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Downloads</a></li>
					<li><a href="#">Press</a></li>
					<br>
					<li><a href="#">Privacy-Settings</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php get_template_part('template-parts/general/general', 'svg'); ?>
<?php wp_footer(); ?>
</body>
</html>
