<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Bogstrap
 * @since Blogstrap 1.0
 */

?>

<header class="entry-header">
    <?php the_title('<h2 class="blog-post-title"> ', '</h2>'); ?>
    <p class="blog-post-meta"><?php the_date(); ?> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a></p>
    <?php has_post_thumbnail() ? the_post_thumbnail('full', array('class' => 'img-fluid mb-2 pb-2')) : null; ?>
</header><!-- /.entry-header -->