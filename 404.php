<?php
/**
 * The template for displaying 404 pages (not found)
 * The main template file.
 * @package Fresh Theme
 */

get_header(); ?>

	<section class="error-404 not-found">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fresh theme' ); ?></h1>
			<p>
				<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fresh theme' ); ?>	
			</p>

			<?php
				get_search_form();
				the_widget( 'WP_Widget_Recent_Posts' );
			?>
	</section><!-- .error-404 -->


<?php 
get_footer();
