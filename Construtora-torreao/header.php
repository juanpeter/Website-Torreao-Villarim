<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Construtora Torreão Villarim</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google Fonts CDN-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400" rel="stylesheet">
    <!--Normalize.css-->
        <link  href="<?php echo get_bloginfo('template_directory'); ?>/styles/normalize.css" rel="stylesheet">
    <!--Bootstrap CSS CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <!--Fontawesome CSS CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--Own Css-->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/styles/style.css" rel="stylesheet">
    <!--wp+_section-->
        <?php wp_head();?>
    </head>
    <body>
        <header>
            <nav id="dropNav">
                <a href="index.php?page_id=129">
                    <img src="<?php echo get_template_directory_uri().'/images/logoTipo.png'; ?>" />
                </a>
                <i class="fas fa-bars mobile-view" id="toggleNav"></i>
                <ul>
                    <li class='linkTop' alt="Link para o topo da página">Home</li>
                    <li class='linkDescription' alt="Nossa história">Institucional</li>
                    <li class='linkProducts' alt="Empreendimentos">Empreendimentos</li>
                    <a href="index.php?page_id=220" alt="Entre em contato!"><li>Contato</li></a>
                </ul>
                <div class="dropNav-items">
                    <a class='linkTop' alt="Link para o topo da página">Home</a>
                    <hr>
                    <a class='linkDescription' alt="Nossa história">Institucional</a>
                    <hr>
                    <a class='linkProducts' alt="Empreendimentos">Empreendimentos</a>
                    <hr>
                    <a href="index.php?page_id=220" alt="Entre em contato!">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </nav>
        </header>