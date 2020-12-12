<?php get_header();?>

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