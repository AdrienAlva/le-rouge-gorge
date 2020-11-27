<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >

	<div class="wrapper-blog-header">
		<header id="blog-header">
			<div class="header-first-row">
				
					<a href="/wordpress"><img id="logo" src="<?php bloginfo( 'template_directory' );?>/images/logo.png"></a>

					<?php 

						wp_nav_menu( 
							array( 'theme_location' => 'top-menu',
									'menu_class' => 'top-menu')
						);
					
					?>
					
			</div>
			<div class="blog-header-second-row">
				<p><a href="/wordpress">Accueil</a> > Blog</p>
				<h1 id="blog-title"><a href="/wordpress/blog">MON BLOG</a></h1>			
			</div>
		</header>
	</div>

	<div id="single-post-content">

		<h2><?php the_title();?></h2>	
		<p id="author-date"> Par Géraldine Rodrigues le <?php echo get_the_date();?></p>
		<!-- <?php if(has_post_thumbnail()):?>
			<div id="post-img-wrapper">
				<img src="<?php the_post_thumbnail_url( 'post_image');?>" alt="<?php the_title();?>">
			</div>
		<?php endif;?>
 -->
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
		
			<?php the_content();?>
		
		<?php endwhile; else: endif;?>

		<?php get_sidebar();?>

	</div>

	<?php get_footer();?>