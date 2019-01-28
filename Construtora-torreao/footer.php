            </main>
        </div><!--End of container-fluid!-->
        <footer>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-2'>
                        <address>
                            <img src="<?php echo get_template_directory_uri().'/images/logoTipoInvertida.png'; ?>" />
                            <p>Av Amazonas, 290
                            <br>Joao Pessoa - PB
                            <br>58030-140</p>
                        </address>
                    </div>
                    <div class='col-md-2'>
                        <h2><a href="index.php?page_id=30">Institucional</a></h2>
                    </div>
                    <div class='col-md-3'>
                        <h2>Empreendimentos</h2>
                        <p><a href="index.php?page_id=66">
                            Prontos para morar
                        </a></p>
                        <p><a href="index.php?page_id=180">
                            Concluídos
                        </a></p>
                        <p><a href="index.php?page_id=203">
                            Obras Públicas
                        </a></p>
                    </div>
                    <div class='col-md-2'>
                        <h2><a href="index.php?page_id=220">Contato</a></h2>
                    </div>
                    <div class='col-md-3'>
                        <h2>Siga-nos</h2>
                        <div class="social-links">
                            <a href="https://www.facebook.com/construtoratorreaovillarim/" target="_blank">
                                <div class='circle'>
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a href="#" target="_blank">
                                <div class='circle'>
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </a>
                            <a href="#" target="_blank">
                                <div class='circle'>
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--End of container-fluid!-->
        </footer>
    <!--Bootstrap Js CDN-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Own Js-->
        <script src="<?php echo get_bloginfo('template_directory'); ?> /scripts/script.js"><script>
        <?php wp_footer();?>
    </body>
</html>