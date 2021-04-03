<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post clearfix text-break'); ?>>
    <?php 
    get_template_part('template-parts/header/entry-header');
    the_content();
    get_template_part('template-parts/content/content-pagination');
    ?>
    <footer>        
        <ul class="list-inline pt-4">
        Categories:
        <?php
            foreach (get_the_category() as $category) {
			    echo '<li class="list-inline-item"><a href="'.esc_url(get_category_link($category->term_id)).'">'.$category->cat_name.'</a></li>';
		    }
        ?>
        </ul>
        <?php if (has_tag()) : ?>
        <ul class="list-inline">
        Tags:
        <?php
            foreach (get_the_tags() as $tag) {
                echo '<li class="list-inline-item"><a href="'.esc_url(get_tag_link($tag->term_id)).'">'.$tag->name.'</a></li>';
            }
        ?>
        </ul>
        <?php endif; ?>
    </footer>
</article>