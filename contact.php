<?php

/*
Template Name: Contact Page
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

	<div class="wrapper-contact-header show-desktop hide-mobile">
		<header id="contact-header">
			<div class="contact-header-first-row">
				
				<a href="/wordpress"><img id="logo-contact" src="<?php bloginfo( 'template_directory' );?>/images/header/logo-header.png"></a>
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
			<div class="contact-header-second-row">
				<p><a href="/wordpress">Accueil</a> > Contact</p>
				<h1 id="contact-title"><a href="/wordpress/cours">Me contacter</a></h1>				
			</div>
		</header>
	</div>

	<?php include 'responsive-navbar.php' ?>

	<div id="contact-background" class="show-mobile hide-desktop">
		<div id="mobile-contact-header-content">
			<h1 id="contact-title-mobile">Me contacter</h1>
		</div>	
	</div>

	<div id="contact-content">

		<div id="contact-main-container">
			<div id="contact-main-container-left">
				<p id="contact-question">Une question, besoin d'un renseignement ?</p>
				<p id="pre-form-p">Renseignez les champs ci-dessous et je vous recontacterai<br/> dès que possible.</p>
				<?php echo do_shortcode('[contact-form-7 id="194" title="Formulaire de contact 1"]'); ?>
			</div>

			<hr class="hide-desktop show-mobile" style="width: 100%;">

			<adress id="contact-main-container-right">
				<p id="atelier-p">Mon atelier :</p>
				<div id="contact-location">
					<img src="<?php bloginfo( 'template_directory' );?>/images/contact/location.png">
					<p><a href="https://www.betamachine.fr/">Association BetaMachine</a><br/>8 rue de la Taye<br/>28110 Lucé</p>
				</div>

				<div id="contact-phone">

					<img src="<?php bloginfo( 'template_directory' );?>/images/contact/mail.png">
					<p>contact@atelier-rougegorge.fr</p>
				</div>

				<div id="desktop-art">
					<img src="<?php bloginfo( 'template_directory' );?>/images/contact/desktop.png">

				</div>

			</adress>
		</div>
		
	</div>

<?php get_footer();?>