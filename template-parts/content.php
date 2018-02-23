<?php
/**
 * Template part for displaying posts.
 * @package Fresh Theme
 */
?>


<a href="<?php echo get_permalink( $post->ID ); ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_title(); ?>

		<?php 
			// echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); 
		?> 

		<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="" width="300" height="300">

	</article><!-- #post-## -->
</a>