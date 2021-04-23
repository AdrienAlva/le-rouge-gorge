<?php

/*
Template Name: About Page
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

	<div class="wrapper-about-header show-desktop hide-mobile">
		<header id="about-header">
			<div class="about-header-first-row">
				
				<a href="/wordpress"><img id="logo-about" src="<?php bloginfo( 'template_directory' );?>/images/header/logo-header.png"></a>

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
			<div class="about-header-second-row">
				<p><a href="/wordpress">Accueil</a> > Qui-suis-je</p>
				<h1 id="about-title"><a href="/wordpress/qui-suis-je">Qui-suis-je ?</a></h1>				
			</div>
		</header>
	</div>

	<?php include 'responsive-navbar.php' ?>

	<div id="about-background" class="show-mobile hide-desktop">
		<div id="mobile-about-header-content">
			<h1 id="about-title-mobile">Qui-suis-je ?</h1>
		</div>	
	</div>

	<div id="about-content">

		<div id="about-content-first-row">
			<div id="div-photo-ceramiste">
				<img id="photo-ceramiste" src="<?php bloginfo( 'template_directory' );?>/images/about/photo-ceramiste.jpg" alt="Geraldine Rodirgues céramiste">
			</div>

			<div id="arrow-n-feather" class="show-desktop hide-mobile">
				<img id="arrow-1" src="<?php bloginfo( 'template_directory' );?>/images/about/arrow.png">
				<img id="feather-1" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-1.png">
			</div>

			<div id="div-text-ceramiste">
				<p>Installée en résidence à <a href="https://www.betamachine.fr/">BetaMachine</a>, tiers-lieu singulier implanté au cœur de la ville de Chartres, je produits dans mon atelier des pièces uniques en grès clair, en terre chamottée, ainsi qu’en porcelaine. 
				Ces matières vivantes et exigeantes, offrent des expériences sensorielles sensibles et complexes. Elles me poussent à la recherche de lignes et de formes simples, propres à chacune d’elles. Les arts de la table constituent ma principale source d’inspiration dans cette recherche de créations originales.</p>
			</div>	
		</div>

		<div id="feather-in-between" class="show-desktop hide-mobile">
			<img id="feather-2" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-2.png">
		</div>

		<div id="about-content-second-row">

			<div id="div-photo-ceramique-mobile" class="show-mobile hide-desktop">
				<img id="photo-ceramique" src="<?php bloginfo( 'template_directory' );?>/images/about/photo-ceramique.jpg">
			</div>

			<div id="text-n-feather">
				<div id="feather-before-text" class="show-desktop hide-mobile">
					<img id="feather-3" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-3.png">
					<img id="feather-4" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-4.png">
				</div>

				<div id="div-text-passion">					
 					<p>La découverte de la céramique en cours de loisir a été décisive et définit parfaitement le rapport que j’entretiens à la matière : un émerveillement constant et durable. Ce contact direct, sans détour, est essentiel dans mon approche. L’écoute, l’attention portée aux détails, l’humilité face à la terre, requiert un travail de tous les instants. Cette matière demande une grande exigence technique et une mise en pratique d’un savoir-faire que j’aime développer et améliorer au quotidien.
					Issue d’un milieu universitaire, j’ai d’abords acquis des connaissances en Histoire de l’art et du Cinéma. Mon enseignement terminé, je me suis tournée vers le monde l’exploitation cinématographique, et ce dans différentes structures.
					J’ai en parallèle suivi des cours au sein de <a href="https://ateliersetsuko.com/">l'Atelier Setsuko</a> à Paris pendant 2 ans, puis validé ma formation professionnelle à l’Atelier Chemin de Terre à Montreuil.</p>
				</div>
			</div>

			<div id="arrow-n-feather-2" class="show-desktop hide-mobile">
				<img id="arrow-2" src="<?php bloginfo( 'template_directory' );?>/images/about/arrow-2.png">
				<img id="feather-5" src="<?php bloginfo( 'template_directory' );?>/images/about/feather-5.png">
			</div>
			<div id="div-photo-ceramique" class="show-desktop hide-mobile">
				<img id="photo-ceramique" src="<?php bloginfo( 'template_directory' );?>/images/about/photo-ceramique.jpg" alt="tournage céramique">
			</div>

		</div>
	</div>

<?php get_footer();?>