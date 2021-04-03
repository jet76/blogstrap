<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

get_header();
?>

<div class="row">
    <div class="col">
        <?php
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content/content-page');

                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            }
        ?>
    </div><!-- /.col -->
</div><!-- /.row -->
<?php get_footer(); ?>