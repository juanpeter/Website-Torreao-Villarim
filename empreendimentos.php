<?php /* Template Name: Empreendimentos Page*/ ?>
<?php get_header();?>

<div class='container-fluid'>
    <section class='portfolio-block'>
        <div class='row'>
            <div class='col-md-6 portfolio-text'>
                <h2 class='title'>Em destaque</h2>
                <p>Nosso último empreendimento!</p>
                <a href="index.php?page_id=66" title="Link para o último empreendimento">
                    <button class='blue-button'>Confira</button>
                </a>
            </div>
            <div class='col-md-6 portfolio-img'></div>
        </div>
    </section>
    <section class='portfolio-block'>
        <div class='row'>
            <div class='col-md-6 portfolio-text'>
                <h2 class='title'>Empreendimentos Entregues</h2>
                <p>Conheça os empreendimentos já entregues pela Torreão Villarim, cujas unidades encontram-se 100% vendidas.</p>
                <a href="index.php?page_id=180" title="Link para Obras Concluídas">
                    <button class='blue-button'>Confira</button>
                </a>
            </div>
            <div class='col-md-6 portfolio-img'></div>
        </div>
    </section>
    <section class='portfolio-block'>
        <div class='row'>
            <div class='col-md-6 portfolio-text'>
                <h2 class='title'>Obras públicas</h2>
                <p>Conheça algumas de nossas obras concluídas em várias cidades dos estados da Paraíba e de Pernambuco em mais de 25 anos de história.</p>
                <a href="index.php?page_id=203" title="Link para Obras Públicas">
                    <button class='blue-button'>Confira</button>
                </a>
            </div>
            <div class='col-md-6 portfolio-img'></div>
        </div>
    </section>

<?php if(is_page(226)) {
        echo '<style>
            .container-fluid{
                padding-top: 7em;
            }
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
    ?>
<?php get_footer(); ?>