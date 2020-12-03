<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<header id="shop-header">
		<div id="top-shop-footer">
			<a href="/wordpress">Accueil > Boutique</a>
			<a href="/wordpress/contact">Une question ? Me Contacter</a>
		</div>

		<div id="bottom-shop-footer">

			<?php 
				wp_nav_menu( 
					array( 'theme_location' => 'top-menu-shop',
							'menu_class' => 'top-menu-shop')
				);
			?> 

			<!-- <div>
				<ul class="top-menu-shop">
					<li><a href="/wordpress/boutique">Boutique</a></li>
					<li><a href="/wordpress/cours">Cours</a></li>
					<li><a href="/wordpress/qui-suis-je">Qui suis-je</a></li>
					<li><a href="/wordpress/blog">Blog</a></li>
					<li><a href="/wordpress/qui-suis-je">Qui suis-je</a></li>
				</ul>
			</div> -->

			<a id="main-logo-shop" href="/wordpress"><img src="<?php bloginfo( 'template_directory' );?>/images/main-logo.png"></a>


		</div>
	</header>