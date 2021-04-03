<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 ?>
 
<?php $path = 'template-parts/footer/'; ?>
<footer class="blog-footer">
<?php is_active_sidebar('sidebar-footer') ? get_template_part($path.'site-footer-sidebar') : get_template_part($path.'site-footer-default'); ?>
</footer>