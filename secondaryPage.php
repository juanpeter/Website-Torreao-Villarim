<?php /* Template Name: Secondary Page*/ ?>

<?php 
if(is_page(129)) {
	//get normal header
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
// If it is the main page
	if(is_page(129)) {
		echo '<script>
			$(document).ready(function() {
				console.log("welcome!");
			});
			</script>';
	}
// If it is the 'empreendimentos' page
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
			.scrollspy {
				left: 13.6em;
            	width: 9em;
			}
			</style>';
		}
// If it is the 'institucional' page
		if(is_page(30)) {
			echo '<style>
			.scrollspy {
				left: 5em;
            	width: 6.5em;
			}
			</style>';
		}
//If it is the 'contato' page
		if(is_page(220)) {
			echo '<style>
			.scrollspy {
				left: 24.75em;
            	width: 4em;
			}
			</style>';
		}
?>
<!--Get the footer-->
<?php get_footer(); ?>