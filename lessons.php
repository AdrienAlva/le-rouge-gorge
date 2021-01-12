<?php

/*
Template Name: Lessons Page
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cours et Ateliers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.typekit.net/cle1xfo.css">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<div class="wrapper-lessons-header show-desktop hide-mobile">
		<header id="lessons-header">
			<div class="lessons-header-first-row">
				
				<a href="/wordpress"><img id="logo-lessons" src="<?php bloginfo( 'template_directory' );?>/images/white-logo.png"></a>
				
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
			<div class="lessons-header-second-row">
				<p><a href="/wordpress">Accueil</a> > Cours</p>
				<h1 id="lessons-title"><a href="/wordpress/cours">Cours et Ateliers</a></h1>				
			</div>
		</header>
	</div>

	<?php include 'responsive-navbar.php' ?>

	<div id="lessons-background" class="show-mobile hide-desktop">
		<div id="mobile-lessons-header-content">
			<h1 id="lessons-title-mobile">Cours et Ateliers</h1>
		</div>	
	</div>

	<div id="lessons-content">
		<div id="lessons-schedule" class="show-desktop hide-mobile">
			<div id="arrow-w-number">
				<img src="<?php bloginfo( 'template_directory' );?>/images/lessons/arrow-1.png">
			</div>

			<div id="schedule-texts">
				<div id="schedule-titles">
					<h2><span class="h2-schedule-color">STAGE D'INITIATION</span></h2>
					<div id="blank-titles"></div>
					<h2><span class="h2-schedule-color">COURS HEBDOMADAIRES</span></h2>
				</div>

				<div class="schedule-row">
					<p>Les lundis et jeudis</p>
					<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/calendar.png">
					<p>Les mardis et samedis</p>
				</div>

				<div class="schedule-row">
					<p>De 15h à 18h</p>
					<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/clock.png">
					<p>De 15h à 18h</p>
				</div>	

				<div class="schedule-row">
					<p>30€/séance</p>
					<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/bubble.png">
					<p>20€/séance</p>
				</div>				
			</div>

			<div id="arrow-w-number-2">
				<img src="<?php bloginfo( 'template_directory' );?>/images/lessons/arrow-2.png">
			</div>
		</div>

		<div id="lessons-schedule-mobile" class="show-mobile hide-desktop">

			<div id="schedule-texts">
				
				<div id="stage-mobile">

					<h2 class="schedule-titles-mobile"><span class="h2-schedule-color">STAGE D'INITIATION</span></h2>

					<div class="schedule-row">
						<p>Les lundis et jeudis</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/calendar.png">
					</div>

					<div class="schedule-row">
						<p>De 15h à 18h</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/clock.png">
					</div>	

					<div class="schedule-row">
						<p>30€/séance</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/bubble.png">
					</div>	
				</div>

				<div id="lessons-mobile">
					<h2 class="schedule-titles-mobile"><span class="h2-schedule-color">COURS HEBDOMADAIRES</span></h2>

					<div class="schedule-row">
						<p>Les mardis et samedis</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/calendar.png">
					</div>

					<div class="schedule-row">
						<p>De 15h à 18h</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/clock.png">	
					</div>	

					<div class="schedule-row">
						<p>20€/séance</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/bubble.png">
					</div>	

				</div>
			
			</div>

		</div>

		<div id="lessons-about">
			<div id="panel-infos-lessons">
				<p>+ D'INFOS</p>
			</div>
			<p id="lessons-about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		
	</div>

<?php get_footer();?>