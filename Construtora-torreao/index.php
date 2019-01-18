<?php get_header(); ?>

<main>
	<div class='container-fluid'>
		<div class='banner'>
			<img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/p.pinheiro.jpg'; ?>"/>
		</div>

		<?php /*get_template_part( 'content', get_post_format() );*/ ?>

		<?php
		/*
					if ( have_posts() ) : while ( have_posts() ) : the_post();
			
						get_template_part( 'content', get_post_format() );
		
					endwhile; endif;

					*/
					?>
		<div class="blog-post">
			<div class="row">
				<div class="col-md-4 option">
					<p>Opção 1</p>
				</div>
				<div class="col-md-4 option">
					<p>Opção 2</p>
				</div>
				<div class="col-md-4 option">
					<p>Opção 3</p>
				</div>
			</div>
		</div>
<?php get_footer(); ?>