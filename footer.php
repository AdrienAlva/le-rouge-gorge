<p id="made-with-love">La céramique créee avec ♡ à Chartres par @rougegorgecéramique2020</p>

<footer>

	<div id="footer-logo-container">
		<a href="/wordpress"><img id="footer-logo"src="<?php bloginfo( 'template_directory' );?>/images/logo.png"></a>
	</div>

	<div id="footer-menu-container">
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