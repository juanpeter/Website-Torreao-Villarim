<div class='section-box CTA'>
    <div class='CTA-message row'>
        <div class='col-12'>
            <h2>Está interessado?</h2>
            <p>Entre em contato conosco!</p>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-6'>
            <i class="fas fa-envelope"></i>
        </div>
        <div class='col-md-6'>
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'content', get_post_format() );
        
            endwhile; endif;
            ?>
        </div>
    </div>
</div>