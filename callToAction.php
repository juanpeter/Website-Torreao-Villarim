<div class='section-box CTA'>
        <i class="fas fa-envelope"></i>
        <h2>Está interessado?</h2>
        <?php
           if ( have_posts() ) : while ( have_posts() ) : the_post();

           get_template_part( 'content', get_post_format() );
   
       endwhile; endif;
       ?>
</div>