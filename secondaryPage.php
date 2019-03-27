<?php /* Template Name: Secondary Page*/ ?>

<?php get_header();?>

<div class='container-fluid'>

<!--To get posts-->
<?php

	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part('content', get_post_format() );

	endwhile; endif;
	?>

<?php

	if (! is_page(129)){
		echo '<style>
		.blog-post{
		padding-top: 100px;
		}
		</style>';
	}
// If it is the 'serviços' page
		if(is_page(66)) {
			echo '<style>
			nav ul li:nth-child(3) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 252px;
            	width: 80px;
			}
			</style>';
			include 'callToAction.php';
		}
		if(is_page(180)) {
			echo '<style>
			nav ul li:nth-child(3) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 252px;
            	width: 80px;
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
				left: 252px;
            	width: 80px;
			}
			</style>';
		}
// If it is the 'institucional' page
		if(is_page(30)) {
			include 'callToAction.php';
			echo '<style>
			nav ul li:nth-child(2) {
				font-weight: 400;
				color: #2e3192;
			}
			.blog-post{
				padding-left: 7.5em;
				padding-right: 7.5em;
			}
			@media screen and (max-width: 720px){
				.blog-post{
					padding-left: 0.5em;
					padding-right: 0.5em;
				}
			}
			.scrollspy {
				left: 97px;
            	width: 118px;
			}
			</style>';
		}
?>
</div>
<!--Get the footer-->
<?php get_footer(); ?>