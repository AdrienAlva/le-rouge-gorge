<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.typekit.net/cle1xfo.css">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<div class="wrapper-blog-header">
		<header id="blog-header">
			<div class="header-first-row">
				
				<a href="/wordpress"><img id="logo" src="<?php bloginfo( 'template_directory' );?>/images/white-logo.png"></a>

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

	<div id="blog-feed">

		<?php if(have_posts()) : while(have_posts()) : the_post();?>

			<div class="blog-post">
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()):?>

					<img class="post-thumbnail" src="<?php the_post_thumbnail_url( 'post_image');?>" alt="<?php the_title();?>">

				<?php endif;?>

				<h2><?php the_title();?></h2>
			
				<?php the_excerpt();?>

				</a>

			</div>
		
		<?php endwhile; else: endif;?>

	</div>

	<div id="pagination">
		<?php
		global $wp_query;
		 
		$big = 999999999;
		 
		echo paginate_links( array(
		    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		    'format' => '?paged=%#%',
		    'current' => max( 1, get_query_var('paged') ),
		    'total' => $wp_query->max_num_pages
		) );
		?>
	</div>

<?php get_footer();?>