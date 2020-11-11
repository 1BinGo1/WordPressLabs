<?php get_header(); ?>
<?php get_template_part("template-parts/breadcrumbs"); ?>
    <section class="post_blog_bg primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-8">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): ?>
                                <?php the_post(); ?>
                                <?php get_template_part('template-parts/content', 'search') ?>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <?php get_template_part('template-parts/content', 'none') ?>
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