<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div class="grid_12 post">
		<h1 class="grid_12 titulo-grande"><a name="not"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="grid_12 entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="grid_12 divider">&nbsp;</div>
<?php echo get_template_part('groups')?>
<div class="grid_12 divider">&nbsp;</div>

<?php get_footer(); ?>