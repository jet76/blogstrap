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
    <?php 
    echo (has_category()) ? '<strong class="d-inline-block mb-2 text-primary">'.esc_html(get_the_category()[0]->cat_name).'</strong>' : '';
    the_title('<h3 class="mb-0">', '</h3>'); 
    ?>
    <div class="mb-1 text-muted"><?php echo get_the_date(); ?></div>
</header><!-- /.entry-header -->