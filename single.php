<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.typekit.net/cle1xfo.css">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<div class="wrapper-blog-header show-desktop hide-mobile">
		<header id="blog-header">
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
			<div class="blog-header-second-row">
				<p><a href="/wordpress">Accueil</a> > Blog</p>
				<h1 id="blog-title"><a href="/wordpress/blog">MON BLOG</a></h1>			
			</div>
		</header>
	</div>

	<?php include 'responsive-navbar.php' ?>

	<div id="blog-background" class="show-mobile hide-desktop">
		<div id="mobile-blog-header-content">
			<h1 id="blog-title-mobile"> MON BLOG</h1>
		</div>	
	</div>

	<div id="single-post-content">

		<h2><?php the_title();?></h2>	
		<p id="author-date"> Par Géraldine Rodrigues le <?php echo get_the_date();?></p>

		<?php if(have_posts()) : while(have_posts()) : the_post();?>
		
			<?php the_content();?>
		
		<?php endwhile; else: endif;?>

		<?php get_sidebar();?>

	</div>

	<?php get_footer();?>