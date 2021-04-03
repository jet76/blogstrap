<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

function blogstrap_setup(){
    //require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
    register_nav_menus(array('primary' => __('Primary menu', 'blogstrap')));

    /*
    * Let WordPress manage the document title.
    * This theme does not use a hard-coded <title> tag in the document head,
    * WordPress will provide it for us.
    */
    add_theme_support('title-tag');	

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support('post-thumbnails');

    // Add support for Block Styles.
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for custom line height controls.
    add_theme_support('custom-line-height');

    // Add support for experimental link color control.
    add_theme_support('experimental-link-color');

    // Add support for experimental cover block spacing.
    add_theme_support('custom-spacing');

    // Add support for custom units.
    // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
    add_theme_support('custom-units');
            
}
add_action('after_setup_theme', 'blogstrap_setup');

function blogstrap_scripts(){
    wp_enqueue_style('blogstrap-style', get_stylesheet_uri());
    if (is_rtl()) {        
        wp_enqueue_style('bootstrap-style-rtl', get_theme_file_uri('/assets/css/bootstrap.rtl.min.css'));
        wp_enqueue_style('bootstrap-blog-style-rtl', get_theme_file_uri('/assets/css/blog.rtl.css'));
    }
    else {
        wp_enqueue_style('bootstrap-style', get_theme_file_uri('/assets/css/bootstrap.min.css'));
        wp_enqueue_style('bootstrap-blog-style', get_theme_file_uri('/assets/css/blog.css'));
    }
}
add_action('wp_enqueue_scripts', 'blogstrap_scripts');

function blogstrap_widgets_init(){
    register_sidebar(
        array(
            'id' => 'sidebar-content',
            'name' => __('Content Sidebar', 'blogstrap'),
            'description' => __('Sidebar for content pages'),
            'class' => 'list-unstyled mb-0',
            'before_widget' => '<div class="p-4">',
            'after_widget' => '</div><!-- /.p-4 -->',
            'before_title' => '<h4 class="fst-italic">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'id' => 'sidebar-footer',
            'name' => __('Footer Sidebar', 'blogstrap'),
            'description' => __('Sidebar for site footer'),
            'before_widget' => '<div class="col-sm mb-4 pb-4">',
            'after_widget' => '</div><!-- /.col -->',
            'before_title' => '<h4 class="fst-italic">',
            'after_title' => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'blogstrap_widgets_init' );

function blogstrap_excerpt_length(){
    return 13;
}
add_filter('excerpt_length', 'blogstrap_excerpt_length');

function blogstrap_password_form(){
    global $post;
    $label = 'pwbox-'.(!empty($post->ID) ? $post->ID : rand() );
    $url = site_url().'/wp-login.php?action=postpass';
    $form = '<p>This content is password protected. To view it please enter your password below:</p>';
    $form .= '<form action="'.$url.'" class="row gy-2 gx-3 align-items-center post-password-form" method="post">';
    $form .= '<div class="col-auto">';
    $form .= '<label for="'.$label.'" class="form-label mt-2">Password</label>';
    $form .= '</div>';
    $form .= '<div class="col-auto">';
    $form .= '<input name="post_password" id="'.$label.'" type="password" size="20" class="form-control" />';
    $form .= '</div>';
    $form .= '<div class="col-auto">';
    $form .= '<button type="submit" name="Submit" value="Enter" class="btn btn-primary">Submit</button> ';
    $form .= '</div>';
    $form .= '</form>';
    return $form;
}    
add_filter('the_password_form', 'blogstrap_password_form');    

?>