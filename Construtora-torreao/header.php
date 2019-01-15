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
        <link href="normalize.css">
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
            <nav>
                <ul>
                    <!--Links não funcionam-->
                    <a href="index/institucional.php"><li>Institucional</li></a>
                    <a href="#"><li>Empreendimentos</li></a>
                    <img src="<?php echo get_template_directory_uri().'/images/logoTipo.png'; ?>" />
                    <a href="login.php"><li>Login Cliente</li></a>
                    <a href="#"><li>Login Corretor</li></a>
                </ul>
            </nav>
        <header>
        <div class="container-fluid">