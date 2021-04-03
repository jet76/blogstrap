<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$sidebar = is_active_sidebar('sidebar-content');
get_header();
?>
<div class="row">
    <div class="<?php echo ($sidebar) ? 'col-md-8' : 'col-md-12'; ?>">
    <?php 
    while (have_posts()) {
        the_post(); 
        get_template_part('template-parts/content/content-single');
    }
    if (comments_open() || get_comments_number()){
        comments_template();
    }
    ?>
    </div><!-- /.col-md-<?php echo ($sidebar) ? '8' : '12'; ?> -->
    <?php 
    if ($sidebar) {
        get_template_part('template-parts/content/content-sidebar');
    }
    ?>
</div><!-- /.row -->
<?php get_footer(); ?>
