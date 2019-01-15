<?php get_header(); ?>

<main>
	<div class="banner"></div>
		
	<div class='container-fluid'>
		<?php /*get_template_part( 'content', get_post_format() );*/ ?>

		<?php

		/*
					if ( have_posts() ) : while ( have_posts() ) : the_post();
			
						get_template_part( 'content', get_post_format() );
		
					endwhile; endif;

					*/
					?>

	<div class="row">
		<div class="col-md-4 option">
			<p>water</p>
		</div>
		<div class="col-md-4 option">
			<p>water</p>
		</div>
		<div class="col-md-4 option">
			<p>water</p>
		</div>
	</div>
<?php get_footer(); ?>