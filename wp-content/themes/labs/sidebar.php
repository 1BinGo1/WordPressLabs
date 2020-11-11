<aside class="col-md-4">
    <?php if (is_active_sidebar('my_prefix_sidebar')): ?>
        <div class="side_blog_bg">
            <?php dynamic_sidebar('my_prefix_sidebar'); ?>
        </div>
    <?php endif; ?>
</aside>