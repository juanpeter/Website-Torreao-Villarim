<?php /* Template Name: Secondary Page*/ ?>

<?php get_header(); ?>
<div class='container-fluid'>
	<div class='banner'>
		<img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/p.pinheiro.jpg'; ?>"/>
	</div>

<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif;
			?>

<?php get_footer(); ?>