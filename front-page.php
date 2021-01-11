<?php get_header();?>

<?php include 'responsive-navbar.php' ?>

<div id="home-bird" class="show-mobile hide-desktop">
	<div id="mobile-header-content">
		<h1 id="atelier-title">At<span class="red-letters">e</span>lier cér<span class="red-letters">a</span>mique</h1>
		<!-- <p>Créations artisanales, artistiques,</p>
		<p>locales et éco-responsables.</p> -->
		<a href="/wordpress/boutique"><button id="discover-button">Je découvre</button></a>
	</div>	
</div>

<div id="home-content">
	<div id="left-feather">
		<img src="<?php bloginfo( 'template_directory' );?>/images/home/feathers-left.png">
	</div>

	<div id="news-wrapper">
		<div id="panel-actus">
			<p>Les ACTUS</p>
		</div>
		
		<div id="news-sub-wrapper">
			<?php echo do_shortcode("[sp_news limit='3' grid='list']"); ?>
		</div>
	</div>	
	
	<div id="right-feather">
		<img src="<?php bloginfo( 'template_directory' );?>/images/home/feathers-right.png">
	</div>
</div>


<?php get_footer();?>