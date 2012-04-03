<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		
<?php if ( have_posts() ) : ?>
				<h1 class="grid_12 titulo-grande"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
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
<?php endif; ?>
<?php get_footer(); ?>
