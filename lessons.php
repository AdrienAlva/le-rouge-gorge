<?php

/*
Template Name: Lessons Page
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

	<div class="wrapper-lessons-header">
		<header id="lessons-header">
			<div class="lessons-header-first-row">
				
					<a href="/wordpress"><img id="logo-lessons" src="<?php bloginfo( 'template_directory' );?>/images/white-logo.png"></a>

					<?php 

						wp_nav_menu( 
							array( 'theme_location' => 'top-menu',
									'menu_class' => 'top-menu')
						);
					
					?>
					
			</div>
			<div class="lessons-header-second-row">
				<p><a href="/wordpress">Accueil</a> > Cours</p>
				<h1 id="lessons-title"><a href="/wordpress/cours">Cours et Ateliers</a></h1>				
			</div>
		</header>
	</div>

	<div id="lessons-content">
		<div id="lessons-schedule">
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
		
	</div>

<?php get_footer();?>