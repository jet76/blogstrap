<?php
/*
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$blogstrap_unique_id = wp_unique_id('search-form-');
$blogstrap_aria_label = !empty($args['aria-label']) ? 'aria-label="'.esc_attr($args['aria-label']).'"' : '';
?>

<form role="search" method="get" class="search-form" <?php echo $blogstrap_aria_label; ?> action="<?php echo esc_url(home_url('/')); ?>">
	<div class="input-group mb-3">
		<span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg></span>
		<input type="text" id="<?php echo esc_attr($blogstrap_unique_id); ?>" class="form-control search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search" />
	</div>
</form>
