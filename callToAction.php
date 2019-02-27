<div class='section-box CTA'>
<?php
    $post_id = 220;
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    echo $title;
    echo $queried_post->post_content;
    ?>
</div>