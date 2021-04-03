<?php
    if (has_nav_menu('primary')):
        $nav = wp_nav_menu(
            array(
                'menu' => 'primary',
  	            'theme_location' => 'primary',
                'container_class' => 'nav-scroller py-1 mb-2',
		        'depth' => 1,
                'items_wrap' => '<nav class="nav d-flex justify-content-between">%3$s</nav>',
		        'echo' =>false,
	        )   
	      );
        $nav = preg_replace('/<\/li>/', '', $nav);
	    $nav = preg_replace('/<li\s[A-za-z0-9="\-\s]*>/', '', $nav);
	    $nav = preg_replace('/<a\s/', '<a class="p-2 link-secondary" ', $nav);
	    echo $nav;
  endif;
?>