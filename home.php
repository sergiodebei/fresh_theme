<?php
/**
 * The main template file.
 * Template Name: Home/Blog
 * Description: Home/Blog
 * @package Fresh Theme
 */

get_header(); ?>

	home / blog

	<?php locate_template( 'template-parts/loop.php', true ); ?>
	<?php locate_template( 'template-parts/pagination.php', true ); ?>

<?php
get_footer();