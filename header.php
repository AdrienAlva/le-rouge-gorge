<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

	<?php wp_head();?> 

</head>
<body <?php body_class();?> >
	<div class="content-lrg">
		<div class="wrapper">
			<header>
				<div class="header-first-row">
					
						<a href="/wordpress"><img id="logo" src="<?php bloginfo( 'template_directory' );?>/images/logo.png"></a>

						<?php 

							wp_nav_menu( 
								array( 'theme_location' => 'top-menu',
										'menu_class' => 'top-menu')
							);
						
						?>
						
				</div>
				<div class="header-second-row">
					<h1 id="atelier-title">At<span class="red-letters">e</span>lier cér<span class="red-letters">a</span>mique</h1>
					<p>Créations artisanales, artistiques,</p>
					<p>locales et éco-responsables.</p>
					<a href="/wordpress/boutique"><button id="discover-button">Je découvre</button></a>
				</div>
			</header>
		</div>