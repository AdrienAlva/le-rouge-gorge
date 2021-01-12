		</div><!-- EO .content div -->
		<p id="made-with-love">La céramique créee avec ♡ à Chartres par @rougegorgecéramique2020</p>

		<footer>

			<div id="footer-logo-container">
				<a class="hide-desktop show-mobile" href="https://www.facebook.com/LeRougeGorge.AtelierCeramique"><img id="facebook-footer" src="<?php bloginfo( 'template_directory' );?>/images/footer/facebook.png"></a>
				<a href="/wordpress"><img id="footer-logo" src="<?php bloginfo( 'template_directory' );?>/images/white-logo.png"></a>
				<a class="hide-desktop show-mobile" href="https://www.instagram.com/lerougegorge_atelierceramique/"><img id="instagram-footer" src="<?php bloginfo( 'template_directory' );?>/images/footer/instagram.png"></a>
			</div>

			<div id="footer-menu-container">
				<div id="social-link" class="hide-mobile">
					<a href="https://www.facebook.com/LeRougeGorge.AtelierCeramique"><img id="facebook-footer" src="<?php bloginfo( 'template_directory' );?>/images/footer/facebook.png"></a>
					<a href="https://www.instagram.com/lerougegorge_atelierceramique/"><img id="instagram-footer" src="<?php bloginfo( 'template_directory' );?>/images/footer/instagram.png"></a>
				</div>
				<?php 

					wp_nav_menu( 
						array( 'theme_location' => 'footer-menu',
								'menu_class' => 'footer-menu')
					);
				
				?>
			</div>	

			<div id="legal-link-container">
				<a href="">Mentions légales</a>
			</div>

		</footer>

		<?php wp_footer();?>
			
	</body>
</html>