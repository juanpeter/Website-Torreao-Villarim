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
				left: 228px;
            	width: 70px;
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
				left: 228px;
            	width: 70px;
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
				left: 228px;
            	width: 70px;
			}
			</style>';
		}
// If it is the 'institucional' page
		if(is_page(30)) {
			// include 'empreendimentos.php';
			include 'callToAction.php';
			echo '<style>
			nav ul li:nth-child(2) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 88px;
            	width: 102px;
			}
			.products {
				position: relative;
				right: 0;
				background-color: #fff;
				opacity: 1;
			}
			.option {
				transform: rotate(0deg);
			}
			.products.title {
				display: none;
			}
			</style>';
		}
//TO-DO tirar isso aqui?
//If it is the 'contato' page
		if(is_page(220)) {
			echo '<style>
			nav ul li:nth-child(4) {
				font-weight: 400;
				color: #2e3192;
			}
			.scrollspy {
				left: 338px;
            	width: 64px;
			}
			</style>';
		}
?>
</div>
<!--Get the footer-->
<?php get_footer(); ?>