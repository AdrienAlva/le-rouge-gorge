<?php

/*
Template Name: Contact Page
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.typekit.net/cle1xfo.css">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<div class="wrapper-contact-header">
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

	<div id="contact-content">

		<div id="contact-main-container">
			<div id="contact-main-container-left">
				<p id="contact-question">Une question, besoin d'un renseignement ?</p>
				<p id="pre-form-p">Renseignez les champs ci-dessous et je vous recontacterai<br/> dès que possible.</p>
				<?php echo do_shortcode('[contact-form-7 id="194" title="Formulaire de contact 1"]'); ?>
			</div>

			<adress id="contact-main-container-right">
				<p id="atelier-p">Mon atelier :</p>
				<div id="contact-location">
					<img src="<?php bloginfo( 'template_directory' );?>/images/contact/location.png">
					<p>BetaMachine<br/>15 Rue Victor Gilbert,<br/>28000 Chartres</p>
				</div>

				<div id="contact-phone">
					<img src="<?php bloginfo( 'template_directory' );?>/images/contact/phone.png">
					<p>02 37 31 40 96</p>
				</div>

				<div id="desktop-art">
					<img src="<?php bloginfo( 'template_directory' );?>/images/contact/desktop.png">

				</div>

			</adress>
		</div>
		
	</div>



<?php get_footer();?>