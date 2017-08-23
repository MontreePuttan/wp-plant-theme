<?php
/**
 * Loop Name: Content Post Detail
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php seed_posted_on(); ?>
			</div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'plant' ),
			'after'  => '</div>',
			) ); ?>

		<?php 
		if($GLOBALS['s_blog_show_profile']) {
			echo "PROFILE";
		}
		?>
	</div>

	<footer class="entry-footer">
		<?php seed_entry_footer(); ?>
	</footer>
</article>