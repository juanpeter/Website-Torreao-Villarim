<?php /* Template Name: Secondary Page*/ ?>

<?php get_header();?>

<div class='container-fluid'>

<div style='padding-top: 5.5em'></div>
<!--To get posts-->
<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

	endwhile; endif;
	?>

<?php

// If it is the 'empreendimentos' page
	if(is_page(226)) {
		include 'empreendimentos.php';
		echo '<style>
			nav ul li:nth-child(3) {
				font-weight: 400;
				color: #2e3192;
			}
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
		if(is_page(66)) {
			echo '<style>
			nav ul li:nth-child(3) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 13.6em;
            	width: 9em;
			}
			</style>';
		}
		if(is_page(180)) {
			echo '<style>
			nav ul li:nth-child(3) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 13.6em;
            	width: 9em;
			}
			</style>';
		}
		if(is_page(203)) {
			echo '<style>
			nav ul li:nth-child(3) {
				font-weight: 400;
				color: #2e3192;
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
			nav ul li:nth-child(2) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 5em;
            	width: 6.5em;
			}
			</style>';
		}
//If it is the 'contato' page
		if(is_page(220)) {
			echo '<style>
			nav ul li:nth-child(4) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 24.75em;
            	width: 4em;
			}
			</style>';
		}
?>
<!--Get the footer-->
<?php get_footer(); ?>