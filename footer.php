            </main>
        </div><!--End of container-fluid!-->
        <footer>
            <nav>
                <ul>
                    <!--Links não funcionam-->
                    <a href="index.php?page_id=30"><li>Institucional</li></a>
                    <a href="#"><li>Empreendimentos</li></a>
                    <a href="login.php"><li>Login Cliente</li></a>
                    <a href="#"><li>Login Corretor</li></a>
                </ul>
            </nav>
            <br>
            <address>
                <p>Av Amazonas, 290
                    Joao Pessoa - PB
                    58030-140
                </p>
                <div class="social-links">
                    <a href="#" target="_blank">
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
                    <a href="tel:#">
                        <li class="mobile-view"><i class="fas fa-phone fa-rotate-90"></i></li>
                    </a>
                </div>
            </address>
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