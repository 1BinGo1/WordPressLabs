<?php

require_once get_template_directory() . "/inc/class-labs-wp-resent-posts.php";
//require_once get_template_directory() . "/inc/class-labs-wp-subscribe-form.php";

function labs_register_foo_widget() {
    register_widget( 'Labs_Widget_Recent_Posts' );
    //register_widget( 'Labs_Widget_Text' );
}
add_action( 'widgets_init', 'labs_register_foo_widget' );

function editTheme(){
    load_theme_textdomain('labs');
    add_theme_support('menus');
    add_theme_support('widgets');
    register_nav_menus([
        'header_menu' => 'Верхняя область',
        'footer_menu' => 'Нижняя область',
    ]);
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'gallery',
        'audio',
    ));
    set_post_thumbnail_size(730, 446);
}
add_action('after_setup_theme', 'editTheme');

function includeCssAncScripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", array(), time(), true);
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . "/scripts/bootstrap.js", array(), time(), true);
    wp_enqueue_script('ajax', "http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js", array(), time(), true);
    wp_enqueue_script('agency', get_stylesheet_directory_uri() . "/scripts/agency.js", array(), time(), true);
    wp_enqueue_script('html5shiv', "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js", array(), time(), true);
    wp_enqueue_script('respond', "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js", array(), time(), true);
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    wp_script_add_data('respond', 'conditional', 'lt IE 9');
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . "/scripts/main.js", array(), time(), true);

    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . "/styles/bootstrap.css", array(), time());
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . "/styles/font-awesome.min.css", array(), time());
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . "/styles/animate.min.css", array(), time());
    wp_enqueue_style('font-Roboto', "https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700", array(), time());
    wp_enqueue_style('font-Open+Sans', "https://fonts.googleapis.com/css?family=Open+Sans:400,600,700", array(), time());
    wp_enqueue_style('style', get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style('main', get_stylesheet_directory_uri() . "/styles/main.css");

}
add_action('wp_enqueue_scripts', 'includeCssAncScripts');

function register_my_widgets(){
    register_sidebar( array(
        'name' => "MySidebar",
        'id' => 'my_prefix_sidebar',
        'description' => __('Эти виджеты будут показаны в правой колонке сайта', 'labs'),
        'before_widget' => '<div id="%1$s" class="sidebar_wrap %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="side_bar_heading"><h6>',
        'after_title' => '</h6></div>'
    ) );
}
add_action( 'widgets_init', 'register_my_widgets' );

function edit_customize_register($wp_customize){
    $wp_customize->add_section('social_section', array(
        'title' => __('Social settings', 'labs'),
        'priority' => 30,
    ));
    $wp_customize->add_section('copyright_section', array(
        'title' => __('Copyright settings', 'labs'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('copy_text', array(
        'default' => __('Copyright text', 'labs'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_social', array(
        'default' => __('Share Your Favorite Mobile Apps With Your Friends', 'labs'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('facebook_social', array(
        'default' => __('Url facebook', 'labs'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('twitter_social', array(
        'default' => __('Url twitter', 'labs'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('google_social', array(
        'default' => __('Url google', 'labs'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('instagram_social', array(
        'default' => __('Url instagram', 'labs'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'copy_text',
        array(
            'label'    => __( 'Copyright text', 'labs' ),
            'section'  => 'copyright_section',
            'settings' => 'copy_text',
            'type'     => 'textarea',
        )
    );
    $wp_customize->add_control(
        'header_social',
        array(
            'label'    => __( 'Social header in footer', 'labs' ),
            'section'  => 'social_section',
            'settings' => 'header_social',
            'type'     => 'text',
        )
    );
    $wp_customize->add_control(
        'facebook_social',
        array(
            'label'    => __( 'Facebook url', 'labs' ),
            'section'  => 'social_section',
            'settings' => 'facebook_social',
            'type'     => 'text',
        )
    );
    $wp_customize->add_control(
        'twitter_social',
        array(
            'label'    => __( 'Twitter url', 'labs' ),
            'section'  => 'social_section',
            'settings' => 'twitter_social',
            'type'     => 'text',
        )
    );
    $wp_customize->add_control(
        'google_social',
        array(
            'label'    => __( 'Google url', 'labs' ),
            'section'  => 'social_section',
            'settings' => 'google_social',
            'type'     => 'text',
        )
    );
    $wp_customize->add_control(
        'instagram_social',
        array(
            'label'    => __( 'Instagram url', 'labs' ),
            'section'  => 'social_section',
            'settings' => 'instagram_social',
            'type'     => 'text',
        )
    );
}
add_action('customize_register', 'edit_customize_register');

function print_pagination($args = array())
{
    $defaults = array(
        'range' => 4,
        'custom_query' => FALSE,
        'previous_string' => __('Previous', 'text-domain'),
        'next_string' => __('Next', 'text-domain'),
        'before_output' => '<div class="next_page"><ul class="page-numbers">',
        'after_output' => '</ul></div>'
    );

    $args = wp_parse_args(
        $args,
        apply_filters('wp_bootstrap_pagination_defaults', $defaults)
    );

    $args['range'] = (int)$args['range'] - 1;
    if (!$args['custom_query'])
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int)$args['custom_query']->max_num_pages;
    $page = intval(get_query_var('paged'));
    $ceil = ceil($args['range'] / 2);

    if ($count <= 1)
        return FALSE;

    if (!$page)
        $page = 1;

    if ($count > $args['range']) {
        if ($page <= $args['range']) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ($page >= ($count - $ceil)) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ($page >= $args['range'] && $page < ($count - $ceil)) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr(get_pagenum_link($previous));

    if ($previous && (1 != $page))
        $echo .= '<li><a href="' . $previous . '" class="page-numbers" title="' . __('previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';

    if (!empty($min) && !empty($max)) {
        for ($i = $min; $i <= $max; $i++) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="page-numbers current">' . str_pad((int)$i, 1, '0', STR_PAD_LEFT) . '</span></li>';
            } else {
                $echo .= sprintf('<li><a href="%s" class="page-numbers" >%2d</a></li>', esc_attr(get_pagenum_link($i)), $i);
            }
        }
    }

    $next = intval($page) + 1;
    $next = esc_attr(get_pagenum_link($next));
    if ($next && ($count != $page))
        $echo .= '<li><a href="' . $next . '" class="page-numbers" title="' . __('next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';

    if (isset($echo))
        echo $args['before_output'] . $echo . $args['after_output'];
}

class Walker_Edit_Widget_Categories extends Walker_Category{

    /**
     * Starts the element output.
     *
     * @since 2.1.0
     *
     * @see Walker::start_el()
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param object $category Category data object.
     * @param int    $depth    Optional. Depth of category in reference to parents. Default 0.
     * @param array  $args     Optional. An array of arguments. See wp_list_categories(). Default empty array.
     * @param int    $id       Optional. ID of the current category. Default 0.
     */
    public function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {


        /** This filter is documented in wp-includes/category-template.php */
        $cat_name = apply_filters( 'list_cats', esc_attr( $category->name ), $category );

        // Don't generate an element if the category name is empty.
        if ( '' === $cat_name ) {
            return;
        }

        $atts         = array();
        $atts['href'] = get_term_link( $category );

        if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
            /**
             * Filters the category description for display.
             *
             * @since 1.2.0
             *
             * @param string $description Category description.
             * @param object $category    Category object.
             */
            $atts['title'] = strip_tags( apply_filters( 'category_description', $category->description, $category ) );
        }

        /**
         * Filters the HTML attributes applied to a category list item's anchor element.
         *
         * @since 5.2.0
         *
         * @param array   $atts {
         *     The HTML attributes applied to the list item's `<a>` element, empty strings are ignored.
         *
         *     @type string $href  The href attribute.
         *     @type string $title The title attribute.
         * }
         * @param WP_Term $category Term data object.
         * @param int     $depth    Depth of category, used for padding.
         * @param array   $args     An array of arguments.
         * @param int     $id       ID of the current category.
         */
        $atts = apply_filters( 'category_list_link_attributes', $atts, $category, $depth, $args, $id );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $count_categories = '<span>' . number_format_i18n( $category->count ) . '</span>';

        $link = sprintf(
            '<a%s><i class="fa fa-folder-open-o" aria-hidden="true"></i>%s%s</a>',
            $attributes,
            $cat_name,
            $count_categories
        );

        if ( ! empty( $args['feed_image'] ) || ! empty( $args['feed'] ) ) {
            $link .= ' ';

            if ( empty( $args['feed_image'] ) ) {
                $link .= '(';
            }

            $link .= '<a href="' . esc_url( get_term_feed_link( $category->term_id, $category->taxonomy, $args['feed_type'] ) ) . '"';

            if ( empty( $args['feed'] ) ) {
                /* translators: %s: Category name. */
                $alt = ' alt="' . sprintf( __( 'Feed for all posts filed under %s' ), $cat_name ) . '"';
            } else {
                $alt   = ' alt="' . $args['feed'] . '"';
                $name  = $args['feed'];
                $link .= empty( $args['title'] ) ? '' : $args['title'];
            }

            $link .= '>';

            if ( empty( $args['feed_image'] ) ) {
                $link .= $name;
            } else {
                $link .= "<img src='" . esc_url( $args['feed_image'] ) . "'$alt" . ' />';
            }
            $link .= '</a>';

            if ( empty( $args['feed_image'] ) ) {
                $link .= ')';
            }
        }

        if ( ! empty( $args['show_count'] ) ) {
            $link .= ' (' . number_format_i18n( $category->count ) . ')';
        }
        if ( 'list' === $args['style'] ) {
            $output     .= "\t<li";
            $css_classes = array(
                'cat-item',
                'cat-item-' . $category->term_id,
            );

            if ( ! empty( $args['current_category'] ) ) {
                // 'current_category' can be an array, so we use `get_terms()`.
                $_current_terms = get_terms(
                    array(
                        'taxonomy'   => $category->taxonomy,
                        'include'    => $args['current_category'],
                        'hide_empty' => false,
                    )
                );

                foreach ( $_current_terms as $_current_term ) {
                    if ( $category->term_id == $_current_term->term_id ) {
                        $css_classes[] = 'current-cat';
                        $link          = str_replace( '<a', '<a aria-current="page"', $link );
                    } elseif ( $category->term_id == $_current_term->parent ) {
                        $css_classes[] = 'current-cat-parent';
                    }
                    while ( $_current_term->parent ) {
                        if ( $category->term_id == $_current_term->parent ) {
                            $css_classes[] = 'current-cat-ancestor';
                            break;
                        }
                        $_current_term = get_term( $_current_term->parent, $category->taxonomy );
                    }
                }
            }

            /**
             * Filters the list of CSS classes to include with each category in the list.
             *
             * @since 4.2.0
             *
             * @see wp_list_categories()
             *
             * @param array  $css_classes An array of CSS classes to be applied to each list item.
             * @param object $category    Category data object.
             * @param int    $depth       Depth of page, used for padding.
             * @param array  $args        An array of wp_list_categories() arguments.
             */
            $css_classes = implode( ' ', apply_filters( 'category_css_class', $css_classes, $category, $depth, $args ) );
            $css_classes = $css_classes ? ' class="' . esc_attr( $css_classes ) . '"' : '';

            $output .= $css_classes;
            $output .= ">$link\n";
        } elseif ( isset( $args['separator'] ) ) {
            $output .= "\t$link" . $args['separator'] . "\n";
        } else {
            $output .= "\t$link<br />\n";
        }
    }

}

function edit_widget_categories($args){
    $walker = new Walker_Edit_Widget_Categories();
    $args = array_merge($args, array('walker' => $walker));
    return $args;
}
add_filter('widget_categories_args', 'edit_widget_categories');

function edit_tag_cloud($args){
    $args['format'] = 'list';
    $args['smallest'] = 14;
    $args['unit'] = 'px';
    return $args;
}
add_filter('widget_tag_cloud_args', 'edit_tag_cloud');

function applayes_reorder_comment_fields($fields){
    $new_fields = array();
    $myorder = array('author', 'email', 'comment');
    foreach ($myorder as $key){
        $new_fields[$key] = $fields[$key];
        unset($fields[$key]);
    }
    if ($fields){
        foreach ($myorder as $key => $val){
            $new_fields[$key] = $val;
        }
    }
    return $new_fields;
}
add_filter('comment_form_fields', 'labs_reorder_comment_fields');

function applyes_list_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-wrap-info">
        <div class="comment-author vcard">
            <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </div>
        <div class="comment-meta commentmetadata">
            <?php printf( __( '<cite class="fn author-name">%s</cite>' ), get_comment_author_link() ); ?>
            <br>
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-date">
                <?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
        <br />
    <?php endif; ?>

    <?php comment_text(); ?>

    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
        </div>
    <?php endif; ?>
    <?php
}


$path = '';
add_action('wp_ajax_load_structure', 'load_structure');
add_action('wp_ajax_nopriv_load_structure', 'load_structure');
function load_structure(){
    global $path;
    require_once get_template_directory() . '/lab4/php/sl.php';
    die();
}

$image = ''; $font = ''; $color = '';
add_action('wp_ajax_create_files', 'create_files');
add_action('wp_ajax_nopriv_create_files', 'create_files');
function create_files(){
    require_once get_template_directory() . '/lab3/php/create_pdf.php';
    die();
}

add_action('wp_ajax_remove_files', 'remove_files');
add_action('wp_ajax_nopriv_remove_files', 'remove_files');
function remove_files(){
    require_once get_template_directory() . '/lab3/php/rf.php';
    die();
}

add_action('wp_ajax_update_time', 'update_time');
add_action('wp_ajax_nopriv_update_time', 'update_time');
function update_time(){
    require_once get_template_directory() . '/lab2/parts/update_time.php';
    die();
}

add_action('wp_ajax_load_news', 'load_news');
add_action('wp_ajax_nopriv_load_news', 'load_news');
function load_news(){
    require_once get_template_directory() . '/lab2/parts/filter_news.php';
    die();
}

add_action('wp_ajax_edit_likes', 'edit_likes');
add_action('wp_ajax_nopriv_edit_likes', 'edit_likes');
function edit_likes(){
    require_once get_template_directory() . '/lab2/parts/edit_likes.php';
    die();
}

add_action('wp_ajax_open_tiding', 'open_tiding');
add_action('wp_ajax_nopriv_open_tiding', 'open_tiding');
function open_tiding(){
    require_once get_template_directory() . '/lab2/parts/load_tiding.php';
    die();
}

add_action('wp_ajax_register_user', 'register_user');
add_action('wp_ajax_nopriv_register_user', 'register_user');
function register_user(){
    require_once get_template_directory() . '/lab2/parts/control_register.php';
    die();
}

add_action('wp_ajax_control_register_login', 'control_register_login');
add_action('wp_ajax_nopriv_control_register_login', 'control_register_login');
function control_register_login(){
    require_once get_template_directory() . '/lab2/parts/control_register.php';
    die();
}

add_action('wp_ajax_control_register_password', 'control_register_password');
add_action('wp_ajax_nopriv_control_register_password', 'control_register_password');
function control_register_password(){
    require_once get_template_directory() . '/lab2/parts/control_register.php';
    die();
}

add_action('wp_ajax_control_blur_login', 'control_blur_login');
add_action('wp_ajax_nopriv_control_blur_login', 'control_blur_login');
function control_blur_login(){
    require_once get_template_directory() . '/lab2/parts/control_register.php';
    die();
}

add_action('wp_ajax_control_blur_password', 'control_blur_password');
add_action('wp_ajax_nopriv_control_blur_password', 'control_blur_password');
function control_blur_password(){
    require_once get_template_directory() . '/lab2/parts/control_register.php';
    die();
}

add_action('wp_ajax_control_sign', 'control_sign');
add_action('wp_ajax_nopriv_control_sign', 'control_sign');
function control_sign(){
    require_once get_template_directory() . '/lab2/parts/control_entrance.php';
    die();
}

add_action('wp_ajax_control_sign_login', 'control_sign_login');
add_action('wp_ajax_nopriv_control_sign_login', 'control_sign_login');
function control_sign_login(){
    require_once get_template_directory() . '/lab2/parts/control_entrance.php';
    die();
}

add_action('wp_ajax_control_sign_login_blur', 'control_sign_login_blur');
add_action('wp_ajax_nopriv_control_sign_login_blur', 'control_sign_login_blur');
function control_sign_login_blur(){
    require_once get_template_directory() . '/lab2/parts/control_entrance.php';
    die();
}

add_action('wp_ajax_delete_tiding', 'delete_tiding');
add_action('wp_ajax_nopriv_delete_tiding', 'delete_tiding');
function delete_tiding(){
    require_once get_template_directory() . '/lab2/parts/delete_tiding.php';
    die();
}

add_action('wp_ajax_hide_tiding', 'hide_tiding');
add_action('wp_ajax_nopriv_hide_tiding', 'hide_tiding');
function hide_tiding(){
    require_once get_template_directory() . '/lab2/parts/update_tiding.php';
    die();
}

add_action('wp_ajax_delete_cookie', 'delete_cookie');
add_action('wp_ajax_nopriv_delete_cookie', 'delete_cookie');
function delete_cookie(){
    require_once get_template_directory() . '/lab2/parts/delete_cookie.php';
    die();
}
