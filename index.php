<?php get_header(); ?>

<main>
	<div class='container-fluid'>
		<section>
			<div class='banner'>
				<div class="overlay-main"></div>
				<div class='banner-text'>
					<img src='<?php echo get_template_directory_uri().'/images/logoPP.png'; ?>'>
					<h2>Porto Pinheiro</h2>
					<p>Seu novo lar no Bessa</p>
					<a href="index.php?page_id=66">
						<button>Confira</button>
					</a>
				</div>
			</div>
			<?php include 'buttons.php'; ?>
		<div class='section-box'>
			<div class='row'>
				<div class='col-md-6'>
					<div class="row">
						<h2 class='title'>Prontos para morar</h2>
					</div>
					<div class="row">
						<a class='section-link' href ='#'><p>VER TODOS</p></a>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='row'>
					<!-- <div class="overlay"></div> -->
					<img class ='post-thumbnail' src='<?php echo get_template_directory_uri().'/images/p.pinheiro.jpg'; ?>'>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<h2 class='title description'><a href='index.php?page_id=30'>Sobre a Torreão Villarim</h2></a>
			</div>
			<div class='row description'>
				<p>A Torreão Villarim trabalha há 25 anos no ramo da construção cívil.</p>
				<p>No início das suas atividades, dedicava-se apenas a obras de licitação direcionadas ao Governo como:  Escolas, hospitais, prédios públicos entre outros, que eram o seu principal foco.</p>
				<p>Com o passar do tempo e atendendo a evolução do mercado imobiliário em nossa cidade, surgiram oportunidades para que a construtora desenvolvesse também projetos para a construção de edifício residenciais onde a qualidade e o design avançados de seus empreendimentos se destacam.</p>
				<p>Hoje somos referência em nosso seguimento, e a ideia é sempre evoluir e oferecer o melhor da construção tanto para obras públicas quanto para a rede privada.</p>
				<p> Seja bem vindo!</p>
			</div> -->
		</div>
		<div class='section-box'>
			<div class='row'>
				<div class='col-md-6'>
					<div class="row">
						<h2 class='title'>Empreendimentos</h2>
					</div>
					<div class="row">
						<a class='section-link' href ='#'><p>VER TODOS</p></a>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='row'>
					<!-- <div class="overlay"></div> -->
					<img class ='post-thumbnail' src='<?php echo get_template_directory_uri().'/images/p.pinheiro.jpg'; ?>'>
					</div>
				</div>
			</div>
		</div>
		<div class='section-box'>
			<div class='row'>
				<div class='col-md-6'>
					<div class="row">
						<h2 class='title'>Obras Públicas</h2>
					</div>
					<div class="row">
						<a class='section-link' href ='#'><p>VER TODOS</p></a>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='row'>
					<!-- <div class="overlay"></div> -->
					<img class ='post-thumbnail' src='<?php echo get_template_directory_uri().'/images/p.pinheiro.jpg'; ?>'>
					</div>
				</div>
			</div>
		</div>
		<?php include 'callToAction.php'; ?>
	<!-- <?php include 'empreendimentos.php'; 
	// If it is the main page
	// if(is_page(129)) {
	// 	echo '<style>
	// 		nav ul li:nth-child(1) {
	// 			font-weight: 400;
	// 			color: #2e3192;
	// 		}
	// 	</style>';
	// }
	?> -->
<?php get_footer(); ?>