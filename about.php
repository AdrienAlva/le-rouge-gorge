<?php

/*
Template Name: About Page
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<div class="wrapper-about-header">
		<header id="about-header">
			<div class="about-header-first-row">
				
					<a href="/wordpress"><img id="logo-about" src="<?php bloginfo( 'template_directory' );?>/images/header/logo-header.png"></a>

					<?php 

						wp_nav_menu( 
							array( 'theme_location' => 'top-menu',
									'menu_class' => 'top-menu')
						);
					
					?>
					
			</div>
			<div class="about-header-second-row">
				<p><a href="/wordpress">Accueil</a> > Qui-suis-je</p>
				<h1 id="about-title"><a href="/wordpress/qui-suis-je">Qui-suis-je ?</a></h1>				
			</div>
		</header>
	</div>

	<div id="about-content">

		<div id="about-content-first-row">
			<div id="div-photo-ceramiste">
				<img id="photo-ceramiste" src="<?php bloginfo( 'template_directory' );?>/images/about/photo-ceramiste.jpg">
			</div>

			<div id="arrow-n-feather">
				<img id="arrow-1" src="<?php bloginfo( 'template_directory' );?>/images/about/arrow.png">
				<img id="feather-1" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-1.png">
			</div>

			<div id="div-text-ceramiste">
				<h2>Là, c'est moi: Géraldine</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>	
		</div>

		<div id="feather-in-between">
			<img id="feather-2" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-2">
		</div>

		<div id="about-content-second-row">
			<div id="text-n-feather">
				<div id="feather-before-text">
					<img id="feather-3" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-3.png">
					<img id="feather-4" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-4.png">
				</div>

				<div id="div-text-passion">
					<h2>Là, c'est ma passion: la céramique</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<div id="arrow-n-feather-2">
				<img id="arrow-2" src="<?php bloginfo( 'template_directory' );?>/images/about/arrow-2.png">
				<img id="feather-5" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-5.png">
			</div>
			<div id="div-photo-ceramique">
				<img id="photo-ceramique" src="<?php bloginfo( 'template_directory' );?>/images/about/photo-ceramique.jpg">
			</div>

		</div>
	</div>

<?php get_footer();?>