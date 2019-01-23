<?php /* Template Name: Secondary Page*/ ?>

<?php get_header(); ?>
<div class='container-fluid'>

<div style='padding-top: 5.5em'></div>
<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif;
			?>

<?php get_footer(); ?>