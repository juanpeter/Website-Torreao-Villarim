<?php /* Template Name: Empreendimentos Page*/ ?>
<?php get_header();?>

<div class='container-fluid'>
    <section class='portfolio-block'>
        <div class='row'>
            <div class='col-md-6 portfolio-text'>
                <h2 class='title'>Em breve</h2>
                <p>Lançaremos em breve novos imóveis!</p>
                <a href='#'>
                    <button class='blue-button'>Confira</button>
                </a>
            </div>
            <div class='col-md-6 portfolio-img'></div>
        </div>
    </section>
    <section class='portfolio-block'>
        <div class='row'>
            <div class='col-md-6 portfolio-text'>
                <h2 class='title'>Pronto para morar</h2>
                <p>Confira nossos imóveis prontos para morar</p>
                <a href='#'>
                    <button class='blue-button'>Confira</button>
                </a>
            </div>
            <div class='col-md-6 portfolio-img'></div>
        </div>
    </section>
    <section class='portfolio-block'>
        <div class='row'>
            <div class='col-md-6 portfolio-text'>
                <h2 class='title'>Portfolio</h2>
                <p>Confira os imóveis que fizeram parte de nossa história!</p>
                <a href='#'>
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