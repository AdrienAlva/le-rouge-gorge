<?php

/*
Template Name: Lessons Page
*/

?>

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
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.typekit.net/cle1xfo.css">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<div class="wrapper-lessons-header show-desktop hide-mobile">
		<header id="lessons-header">
			<div class="lessons-header-first-row">
				
				<a href="/"><img id="logo-lessons" src="<?php bloginfo( 'template_directory' );?>/images/white-logo.png"></a>
				
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
				<p><a href="/">Accueil</a> > Cours</p>
				<h1 id="lessons-title"><a href="/cours">Cours et Ateliers</a></h1>				
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
					<p>Sur RDV</p>
					<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/calendar.png">
					<p>Sur RDV</p>
				</div>

				<div class="schedule-row">
					<p>Séance de 3h</p>
					<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/clock.png">
					<p>3h de cours <br> 10 cours au trimestre</p>
				</div>	

				<div class="schedule-row">
					<p>60€</p>
					<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/bubble.png">
					<p>480€</p>
				</div>
				<p class="wecandoo-disclaimer">Possibilité de réserver son cours sur le site <a href="https://wecandoo.fr/ateliers/orleans-blois-chartres/la-poterie-et-ceramique">Wecandoo</a> !</p>
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
						<p>Sur RDV</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/calendar.png">
					</div>

					<div class="schedule-row">
						<p>Séance de 3h</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/clock.png">
					</div>	

					<div class="schedule-row">
						<p>60€</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/bubble.png">
					</div>	
				</div>

				<div id="lessons-mobile">
					<h2 class="schedule-titles-mobile"><span class="h2-schedule-color">COURS HEBDOMADAIRES</span></h2>

					<div class="schedule-row">
						<p>Sur RDV</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/calendar.png">
					</div>

					<div class="schedule-row">
						<p>3h de cours <br> 10 cours au trimestre</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/clock.png">	
					</div>	

					<div class="schedule-row">
						<p>480€</p>
						<img class="center-logos" src="<?php bloginfo( 'template_directory' );?>/images/lessons/bubble.png">
					</div>	

				</div>

                                <p class="wecandoo-disclaimer">Possibilité de réserver son cours sur le site <a href="https://wecandoo.fr/ateliers/orleans-blois-chartres/la-poterie-et-ceramique">Wecandoo</a> !</p>
			
			</div>

		</div>

		<div id="lessons-about">
			<div id="panel-infos-lessons">
				<p>+ D'INFOS</p>
			</div>
			<p id="lessons-about-text">Les cours d’initiations permettent d’expérimenter une première approche de la céramique, en réalisant des formes simples. Elles donnent à toucher et à apprivoiser cette matière organique.
			Sur un rythme plus régulier, l’apprentissage se fera autour de différentes techniques et la création de formes diverses, parfois plus libres. Tout en réalisant vos propres pièces, les cours au trimestre permettent d’acquérir une réelle autonomie dans son apprentissage à l’atelier.
			Si vous avez des questions, n’hésitez à envoyer un mail via le formulaire de contact.</p>
		</div>
		
	</div>

<?php get_footer();?>