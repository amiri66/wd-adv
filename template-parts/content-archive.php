<div class="container">
    <div class="post mb-5">
        <div class="media">
            <img class="mr-3 img-fluid" src="<?php echo get_the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
        <div class="media-body"></div>
        <h3 class="title mb-1"></h3>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="meta mb-1"></div>
    <span class=""="date">
        <?php echo get_the_date(); ?></span>
    </div>
    </div>