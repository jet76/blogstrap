<?php 
    $pagination = wp_link_pages(            
        array(
            'before' => '<nav class="blog-pagination pt-4" aria-label="Pagination">',
            'after' => '</nav>',
            'next_or_number' => 'next',
            'echo' => false,
        )
    );
    $pagination = str_replace('class="post-page-numbers"', 'class="post-page-numbers btn btn-outline-primary"', $pagination);
    $pagination = str_replace('class="post-page-numbers current"', 'class="post-page-numbers current btn btn-outline-secondary disabled"', $pagination);
    echo $pagination;
?>