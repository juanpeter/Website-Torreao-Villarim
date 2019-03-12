<?php get_header(); ?>

<main>
	<div class='container-fluid'>
		<section>
			<div class='banner'>
				<div class="overlay-main"></div>
				<div class='banner-text'>
					<img src='<?php echo get_template_directory_uri().'/images/logoPP.png'; ?>'>
					<h1>Porto Pinheiro</h1>
					<p>Seu novo lar no Bessa</p>
					<a href="index.php?page_id=66">
						<button class='blue-button'>Confira</button>
					</a>
				</div>
			</div>

		<?php include 'buttons.php'; ?>

		<?php include 'description.php'; ?>
		
		<?php include 'callToAction.php'; ?>
	 <!-- If it is the main page -->
	 <?php if(is_page(129)) {
	 	echo '<style>
	 		.blog-post{
				background-color: #8781BD;
				padding: 0;
    			-webkit-box-shadow: none;
    			-moz-box-shadow: none;
    			box-shadow: none;
			 }
			 nav ul li:nth-child(1) {
				font-weight: 400;
				color: #2e3192;
			}
		 </style>';
		 
	 }
	?>
<?php get_footer(); ?>