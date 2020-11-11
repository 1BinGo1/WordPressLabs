<?php get_header(); ?>

<section class="main post_blog_bg primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-8">

                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): ?>
                            <?php the_post(); ?>
                            <?php get_template_part('template-parts/content', get_post_format()) ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php print_pagination(); ?>
                </div>

                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
