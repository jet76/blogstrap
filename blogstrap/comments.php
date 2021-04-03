<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if (post_password_required()){
    return;
}
?>
<h3 class="pb-4 mb-4 fst-italic border-bottom"><?php esc_html_e('Comments', 'blogstrap'); ?></h3>
<!-- Begin comments -->
<?php if (have_comments()): ?>
    <ul class="list-group list-group-flush mb-4 pb-4">
        <?php 
        $comments = wp_list_comments(
            array(
                'style' => 'ul',
                'echo' => false,
            )
        ); 
        $comments = str_replace('ul class="children"', 'ul class="list-group list-group-flush children"', $comments);
        $comments = str_replace('li class="', 'li class="list-group-item ', $comments);
        echo $comments;
        ?>
    </ul><!-- /.pb-4 mb-4 -->
<!-- End Comments -->
<!-- Begin Comments Pagination -->
    <?php
    $comments_pagination = get_the_comments_pagination(
        array(
            'prev_next' => true,
            'prev_text' => 'Previous',
            'next_next' => true,
            'next_text' => 'Next', 
        )
    );

    $comments_pagination = str_replace('nav class="', 'nav class="blog-pagination ', $comments_pagination);
    $comments_pagination = str_replace('<div class="nav-links">', '', $comments_pagination);
    $comments_pagination = str_replace('</div>', '', $comments_pagination);
    $comments_pagination = str_replace('aria-label="Comments"', 'aria-label="Comments Pagination"', $comments_pagination);
    $comments_pagination = preg_replace('/<h2 [a-z="->A-Z ]*<\/h2>/', '', $comments_pagination);
    $comments_pagination = str_replace('page-numbers current', 'btn btn-outline-secondary disabled page-numbers current', $comments_pagination);
    $comments_pagination = str_replace(
        array(
            'class="page-numbers"',
            'class="prev page-numbers',
            'class="next page-numbers"',
        ), 
        'class="btn btn-outline-primary"', $comments_pagination);
    echo $comments_pagination;
	?>
<!-- End Comments Pagination -->
    <?php if (!comments_open()): ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
    <?php endif; !comments_open() ?>
<?php endif; // have_comments() ?>
<!-- Begin Comment Form -->
<?php comment_form(
array(
    'fields' => 
        array(
            'author' => '<div class="mb-3">
                            <label for="author" class="form-label">Name <span class="required">*</span></label>
                            <input id="author" class="form-control" name="author" type="text" maxlength="245" required="required" />
                            </div>',
            'email' => '<div class="mb-3">
                        <label for="email" class="form-label">Email <span class="required">*</span></label>
                        <input id="email" class="form-control" name="email" type="email" maxlength="100" aria-describedby="email-notes" required="required" placeholder="name@example.com">
                        </div>',
            'url' => '<div class="mb-3">
                        <label for="url" class="form-label">Website</label>
                        <input id="url" class="form-control" name="url" type="text" maxlength="200" />
                        </div>',
            'cookies' => '<div class="form-check mb-3">
                            <input id="wp-comment-cookies-consent" class="form-check-input" name="wp-comment-cookies-consent" type="checkbox" value="yes" checked />
                            <label class="form-check-label" for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>',
        ),
        'class_container' => 'comment-respond mb-4 pb-4',
        'class_submit' => 'btn btn-primary',
        'comment_field' => '<textarea id="comment" name="comment" class="form-control mb-3" rows="8" maxlength="65525" required="required"></textarea>', // cols="45"
        'comment_notes_before' => '<div class="comment-notes alert alert-info"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></div>',
    )
);
?>
<!-- End Comment Form -->
