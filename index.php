<?php get_header(); ?>

<main>
	<div class='container-fluid'>
			<div class='banner'>
				<div class='banner-text'>
					<h2>Bem vindo ao seu novo endereço</h2>
				</div>
				<img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/p.pinheiro.jpg'; ?>"/>
			</div>

		<div class="blog-post">
			<div class="row">
				<div class="col-md-4 option">
				<img src="<?php echo get_template_directory_uri().'/images/logoTipo.png'; ?>" />
					<p style='display: inline'>Opção 1</p>
				</div>
				<div class="col-md-4 option">
				<img src="<?php echo get_template_directory_uri().'/images/logoTipo.png'; ?>" />
					<p style='display: inline'>Opção 2</p>
				</div>
				<div class="col-md-4 option">
				<img src="<?php echo get_template_directory_uri().'/images/logoTipo.png'; ?>" />
					<p style='display: inline'>Opção 3</p>
				</div>
			</div>
		</div>
<?php get_footer(); ?>