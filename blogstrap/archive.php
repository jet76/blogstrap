<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

get_header();
$description = get_the_archive_description();

if (have_posts()) {
	echo '<header class="page-header alignwide">';
	the_archive_title('<h1 class="page-title">', '</h1>');
	echo ($description) ? '<div class="archive-description">'.wp_kses_post(wpautop($description)).'</div>' : '';
	echo '</header><!-- /.page-header alignwide -->';
	$post_count = 0;
	while (have_posts()) {
		the_post();
		echo ($post_count % 2 == 0) ? '<div class="row">' : '';
		get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt'));
		$post_count++;
		echo ($post_count % 2 == 0) ? '</div><!-- /.row -->' : '';
	}
	echo ($post_count % 2 != 0) ? '</div><!-- /.row -->' : '';
	get_template_part('template-parts/pagination');
}
else {
	get_template_part('template-parts/content/content-none');
}
get_footer();
?>
