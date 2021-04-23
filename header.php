<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2Z2VMMHDWT"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-2Z2VMMHDWT');
	</script>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.typekit.net/cle1xfo.css">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >
	<div class="content-lrg">
		<div class="wrapper hide-mobile show-desktop">
			<header>
				<div class="header-first-row">
					
						<a href="/wordpress"><img id="logo" src="<?php bloginfo( 'template_directory' );?>/images/header/logo-header.png"></a>

						<div id="home-menu-social">
							<?php 

								wp_nav_menu( 
									array( 'theme_location' => 'top-menu',
											'menu_class' => 'top-menu')
								);
							
							?>
							<div id="header-social">
								<a href="https://www.facebook.com/LeRougeGorge.AtelierCeramique"><img id="facebook-header" src="<?php bloginfo( 'template_directory' );?>/images/footer/facebook.png"></a>
								<a href="https://www.instagram.com/lerougegorge_atelierceramique/"><img id="instagram-header" src="<?php bloginfo( 'template_directory' );?>/images/footer/instagram.png"></a>
							</div>
						</div>

						
				</div>
				<div class="header-second-row">
					<h1 id="atelier-title">At<span class="red-letters">e</span>lier cér<span class="red-letters">a</span>mique</h1>
					<p>Créations artisanales, artistiques</p>
					<p>et locales.</p>
					<a href="/wordpress/boutique"><button id="discover-button">Je découvre</button></a>
				</div>

			</header>
			<div id="white-arrow"><a href="#white-arrow"><img src="<?php bloginfo( 'template_directory' );?>/images/header/white-arrow.png"></a></div>
		</div>