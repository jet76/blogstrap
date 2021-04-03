<?php
/**
 * Template part for displaying sticky posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('p-4 p-md-5 mb-4 text-white rounded bg-dark text-break'); ?>>
    <div class="col-md-6 px-0">
        <header><h1 class="display-4 fst-italic"><?php the_title(); ?></h1></header>
        <p class="lead my-3"><?php echo get_the_excerpt(); ?></p>
        <footer><p class="lead mb-0"><a href="<?php the_permalink(); ?>" class="text-white fw-bold">Continue reading...</a></p></footer>
    </div>
</article>