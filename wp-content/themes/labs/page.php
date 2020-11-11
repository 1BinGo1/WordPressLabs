<?php if (get_page_uri() === "lab-1"): ?>
    <?php get_template_part('lab1/index'); ?>
<?php elseif (get_page_uri() === "lab-2"): ?>
    <?php get_template_part('lab2/parts/index'); ?>
<?php elseif (get_page_uri() === "lab-3"): ?>
    <?php get_template_part('lab3/php/index'); ?>
<?php elseif (get_page_uri() === "lab-4"): ?>
    <?php get_template_part('lab4/php/index'); ?>
<?php elseif (get_page_uri() === "lab-2/entrance"): ?>
    <?php get_template_part('lab2/parts/entrance'); ?>
<?php elseif (get_page_uri() === "lab-2/register"): ?>
    <?php get_template_part('lab2/parts/register'); ?>
<?php elseif (get_page_uri() === "lab-2/administration"): ?>
    <?php get_template_part('lab2/parts/administration'); ?>
<?php else: ?>
    <?php get_header(); ?>
    <section class="post_blog_bg primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <?php get_template_part('template-parts/content', 'page'); ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
<?php endif; ?>

