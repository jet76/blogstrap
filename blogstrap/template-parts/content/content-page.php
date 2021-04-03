<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post clearfix text-break'); ?>>
    <?php 
    get_template_part('template-parts/header/entry-header');
    has_post_thumbnail() ? the_post_thumbnail('full', array('class' => 'img-fluid mb-2 pb-2')) : null;
    the_content();
    get_template_part('template-parts/content/content-pagination');
    ?>
</article>