<?php global $post; ?>
<?php if ((string)$post->ID === "6"): ?>
    <?php get_template_part('lab1/index'); ?>
<?php elseif ((string)$post->ID === "9"): ?>
    <?php get_template_part('lab2/parts/index'); ?>
<?php elseif ((string)$post->ID === "12"): ?>
    <?php get_template_part('lab3/php/index'); ?>
<?php elseif ((string)$post->ID === "15"): ?>
    <?php get_template_part('lab4/php/index'); ?>
<?php else: ?>
    <?php get_header(); ?>
    <?php get_template_part("template-parts/breadcrumbs"); ?>
    <section class="post_blog_bg primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): ?>
                                <?php
                                    the_post();
                                    get_template_part('template-parts/content', 'single');
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
<?php endif; ?>

