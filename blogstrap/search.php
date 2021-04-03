<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

get_header();
get_search_form();
if (!esc_html(get_search_query()) == '') {
	if (have_posts()) { 
		echo '<header>';
		echo '<h2 class="blog-post-title">';
		printf(
			esc_html__('Results for "%s"', 'blogstrap' ), 
			'<span class="page-description search-term">'.esc_html(get_search_query()).'</span>'
		);
		echo '</h2>';
		echo '</header>';
		$post_count = 0;
		while (have_posts()) {
			the_post();
			echo ($post_count % 2 == 0) ? '<div class="row">' : '';
			get_template_part('template-parts/content/content-excerpt');
			$post_count++;
			echo ($post_count % 2 == 0) ? '</div><!-- /.row -->' : '';
		}
		echo ($post_count % 2 != 0) ? '</div><!-- /.row -->' : '';
	}
	else {
		echo '<header>';
		echo '<h2 class="blog-post-title">';
		printf(
			esc_html__('No results for "%s"', 'blogstrap' ), 
			'<span class="page-description search-term">'.esc_html(get_search_query()).'</span>'
		);
		echo '</h2>';
		echo '</header>';
		get_search_form();
	}
	get_template_part('template-parts/pagination');
}
get_footer();
?>
