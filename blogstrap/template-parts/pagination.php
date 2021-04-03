<?php
/**
 * Displays archive and search navigation
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Twenty Blogstrap 1.0
 */

 ?>

<nav class="blog-pagination" aria-label="Pagination">
    <?php
    $pagination = paginate_links(
        array(
            'prev_next' => true,
            'prev_text' => 'Newer',
            'next_next' => true,
            'next_text' => 'Older',
        )
    );
    $pagination = str_replace('class="page-numbers current"', 'class="btn btn-outline-secondary disabled"', $pagination);
    $pagination = str_replace(
        array(
            'class="page-numbers"',
            'class="prev page-numbers',
            'class="next page-numbers"',
        ), 
        'class="btn btn-outline-primary"', $pagination);
    echo $pagination;
    ?>
</nav>