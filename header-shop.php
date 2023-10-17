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
	<header id="shop-header" class="show-desktop hide-mobile">
		<div id="top-shop-header">
			<a href="<?php bloginfo('url'); ?>">Accueil > Boutique</a>
			<a href="<?php bloginfo('url'); ?>/contact">Une question ? Me Contacter</a>
		</div>

		<div id="bottom-shop-header">

			<?php 
				wp_nav_menu( 
					array( 'theme_location' => 'top-menu-shop',
							'menu_class' => 'top-menu-shop')
				);
			?> 

			<a id="main-logo-shop" href="/wordpress"><img src="<?php bloginfo( 'template_directory' );?>/images/shop/shop-logo.png"></a>



			<div id="search-and-icons">

				<?php echo do_shortcode('[wcas-search-form]'); ?>

				<div id="my-account-block-header">
					<a id="my-account-header" href="/wordpress/mon-compte">
						<img src="<?php bloginfo( 'template_directory' );?>/images/shop/MON-COMPTE.png">
						<p>Mon compte</p>
					</a>
				</div>
				<div id="cart-block-header">
					<a id="cart-header" href="/wordpress/panier">
						<img src="<?php bloginfo( 'template_directory' );?>/images/shop/PANIER.png">
						<p>Mon panier</p>
					</a>
				</div>
			</div>
		</div>
	</header>

	<?php include 'responsive-navbar.php' ?>

	<body <?php body_class();?> >	
		<div class="content-lrg">
			<div id="mobile-search-bar" class="show-mobile hide-desktop">
				<?php echo do_shortcode('[wcas-search-form]'); ?>	
			</div>		