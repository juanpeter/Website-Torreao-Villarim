<?php /* Template Name: Secondary Page*/ ?>

<?php 
if(is_page(129)) {
	get_header();
}
else {
	get_header('secondary');
}
 wp_head();
?>

<div class='container-fluid'>

<div style='padding-top: 5.5em'></div>
<!--To get posts-->
<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif;
			?>

<?php 
	if(is_page(226)) {
		include 'empreendimentos.php';
		echo '<style>
			.blog-post {
			padding-bottom: 0;
			}
			.products {
				position: relative;
				right: 0;
				background-color: #fff;
				padding: 2em;
				padding-top: 0;
				opacity: 1;
			}
			.option {
				transform: rotate(0deg);
			}
			hr {
				opacity: 0;
			}
			.products .title {
				display: none;
			}
			</style>';
		}
?>
<!--Get the footer-->
<?php get_footer(); ?>