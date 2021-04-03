<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blogstrap
 * @since Blogstrap 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 text-break') ?>>
	<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		<div class="col p-4 d-flex flex-column position-static">
			<?php get_template_part('template-parts/header/excerpt-header'); ?>
			<p class="card-text mb-auto"><?php echo get_the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
		</div><!-- /.col p-4 d-flex flex-column position-static -->		
		<?php if (has_post_thumbnail()): ?>	
		<div class="col-auto d-none d-lg-block">		
			<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" class="img-responsive" width="200" height="250">
		</div><!-- /.col-auto d-none d-lg-block -->
		<?php endif; ?>
	</div><!-- /.row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative -->
</article>
