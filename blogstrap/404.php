<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

get_header();
?>
<div class="row mb-4 pb-4">
	<header>
		<h1 class="page-title"><?php esc_html_e('Nothing here', 'twentytwentyone'); ?></h1>
	</header>
	<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'blogstrap'); ?></p>
	<?php get_search_form(); ?>
</div>
<?php get_footer(); ?>
