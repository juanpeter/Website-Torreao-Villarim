<?php get_header(); ?>

<main>
	<div class='container-fluid'>
			<div class='banner'>
				<div class="overlay-main"></div>
				<div class='banner-text'>
					<h2>Porto Pinheiro</h2>
					<p>Conheça seu novo lar no Bessa</p>
					<a href="index.php?page_id=66">
						<button>Confira</button>
					</a>
				</div>
			</div>
		<div class='description'>
			<hr>
			<div class="row">
				<h2 class='title'><a href='index.php?page_id=30'>Sobre a Torreão Villarim</h2></a>
			</div>
			<div class='row'>
				<p>A Torreão Villarim trabalha há 25 anos no ramo da construção cívil.</p>
				<p>No início das suas atividades, dedicava-se apenas a obras de licitação direcionadas ao Governo como:  Escolas, hospitais, prédios públicos entre outros, que eram o seu principal foco.</p>
				<p>Com o passar do tempo e atendendo a evolução do mercado imobiliário em nossa cidade, surgiram oportunidades para que a construtora desenvolvesse também projetos para a construção de edifício residenciais onde a qualidade e o design avançados de seus empreendimentos se destacam.</p>
				<p>Hoje somos referência em nosso seguimento, e a ideia é sempre evoluir e oferecer o melhor da construção tanto para obras públicas quanto para a rede privada.</p>
				<p> Seja bem vindo!</p>
			</div>
		</div>
	<?php include 'empreendimentos.php'; 
	// If it is the main page
	if(is_page(129)) {
		echo '<style>
			nav ul li:nth-child(1) {
				font-weight: 400;
				color: #2e3192;
			}
		</style>';
	}
	?>
<?php get_footer(); ?>