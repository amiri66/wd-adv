<?php
get_header();
?>
<article class="content pc-3 p-5 py-5 -md-5">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
        the_post();
            get_template_part('template-parts/content', 'single');
    
    ?>
    </article>
    <?php get_footer(); ?> 