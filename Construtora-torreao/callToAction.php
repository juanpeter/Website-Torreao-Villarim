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
            $post_id = 278;
            $queried_post = get_post($post_id);
            $content = $queried_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
            ?>
        </div>
    </div>
</div>