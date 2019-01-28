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
		<div class="blog-post">
			<hr>
			<div class="description">
				<h2>Sobre a Torreão Villarim</h2>
				<p>A Torreão Villarim trabalha há 25 anos no ramo da construção cívil.</p>
				<p>No início das suas atividades, dedicava-se apenas a obras de licitação direcionadas ao Governo como:  Escolas, hospitais, prédios públicos entre outros, que eram o seu principal foco.</p>
				<p>Com o passar do tempo e atendendo a evolução do mercado imobiliário em nossa cidade, surgiram oportunidades para que a construtora desenvolvesse também projetos para a construção de edifício residenciais onde a qualidade e o design avançados de seus empreendimentos se destacam.</p>
				<p>Hoje somos referência em nosso seguimento, e a ideia é sempre evoluir e oferecer o melhor da construção tanto para obras públicas quanto para a rede privada.</p>
				<p> Seja bem vindo!</p>
			</div>
			<hr>
		<div class="row products">
			<h2>Empreendimentos</h2>
		</div>
		<div class='row'>
			<div class="col-md-4 option">
				<a href="index.php?page_id=66">
				<div class="overlay"></div>
						<img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/p.pinheiro-min2.jpg'; ?>" alt="Empreendimentos prontos para morar!"/>
					<p>Prontos para morar</p>
				</a>
			</div>
			<div class="col-md-4 option">
				<a href="index.php?page_id=180">
					<div class="overlay"></div>
						<img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/res2.png'; ?>" alt="Empreendimentos prontos para morar!"/>
					<p>Concluídos</p>
				</a>
			</div>
			<div class="col-md-4 option">
				<a href="index.php?page_id=203">
					<div class="overlay"></div>
						<img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/feirinhaTambau2.png'; ?>" alt="Empreendimentos prontos para morar!"/>
					<p>Obras Públicas</p>
				</a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>