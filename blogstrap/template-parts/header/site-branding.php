<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

 ?>

<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
    	<div class="col-4 pt-1">
        <?php 
        if (!is_user_logged_in()) {
            echo '<a class="link-secondary" href="'.esc_url(wp_registration_url()).'">'.esc_html('Subscribe').'</a>';
        }
        else {
            $current_user = wp_get_current_user();
            echo 'Hello, <a class="link-secondary" href="'.esc_url(get_edit_profile_url($current_user->ID)).'">'.$current_user->display_name.'</a>!';
        }
        ?>
        </div>
		<div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name')); ?></a>
        </div>
		<div class="col-4 d-flex justify-content-end align-items-center">
            <a class="link-secondary" href="<?php echo esc_url(home_url('/?s')); ?>" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            </a>
            <?php
            if (!is_user_logged_in()) {
                echo '<a class="btn btn-sm btn-outline-secondary" href="'.esc_url(wp_login_url()).'">Sign In</a>';
            }
            else {
                echo '<a class="btn btn-sm btn-outline-secondary" href="'.esc_url(wp_logout_url()).'">Sign Out</a>';
            }
            ?>	        
        </div>
    </div>
</header>