<?php 
	if(!is_cart() & !is_page(array('commander', 'mon-compte'))) {
		get_header();
	} else {
		get_header( 'shop' ); 
	}
?>

<div class="content">

	<h1><?php the_title();?></h1>	

	<?php if(have_posts()) : while(have_posts()) : the_post();?>
	
		<?php the_content();?> 
	
	<?php endwhile; else: endif;?>

	<?php get_sidebar();?>

</div>

<?php get_footer();?>