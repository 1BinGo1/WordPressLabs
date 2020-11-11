<article id="<?php the_ID(); ?>" <?php post_class('blog_post'); ?>>
    <h4><?php echo get_the_title(); ?></h4>
    <?php if (has_category()): ?>
        <div class="blog_category">
            <ul>
                <li><?php the_category(', '); ?></li>
            </ul>
        </div>
    <?php endif; ?>
    <div class="blog_text">
        <ul>
            <li> | </li>
            <li> Post By : <a href="#"><?php the_author_posts_link(); ?></a></li>
            <li> | </li>
            <li>  On : <?php the_date(); ?> </li>
        </ul>
    </div>
    <div class="blog_post_img">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php the_content(); ?>
</article>