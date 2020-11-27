<?php get_header();?>

<div id="news-wrapper">
	<div id="panel-actus">
		<p>Les ACTUS</p>
	</div>
	
	<div id="news-sub-wrapper">
		<?php echo do_shortcode("[sp_news limit='3' grid='list']"); ?>
	</div>


</div>

<?php get_footer();?>