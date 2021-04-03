<?php
/**
 * Template part for displaying sidebar in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

?>

<div class="col-md-4">
    <?php
        if(function_exists('dynamic_sidebar')) {
            ob_start();
            dynamic_sidebar('content-sidebar');
            $content_sidebar = ob_get_contents();
            ob_end_clean();
            $content_sidebar = str_replace('<ul', '<ol class="list-unstyled mb-0"', $content_sidebar);
            $content_sidebar = str_replace('</ul>', '</ol>', $content_sidebar);
            echo $content_sidebar;
        }  
    ?>
</div><!-- /.col-md-4 -->