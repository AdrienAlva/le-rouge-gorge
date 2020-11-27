<?php

/*
Template Name: Shop Page
*/

get_header();?>

<div id="shop-content">

	<?php if(have_posts()) : while(have_posts()) : the_post();?>
	
	<?php the_content();?>
	
	<?php endwhile; else: endif;?>

	<?php get_sidebar();?>

</div>

<?php get_footer();?>


