<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 */
?>
<?php if ( ! have_posts() ) : ?>
	<div class="grid_12 post">
		<h2 class="entry-title"><?php _e( 'Not Found', 'phpms' ); ?></h2>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'phpms' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="grid_12 divider">&nbsp;</div>
	<?php echo get_template_part('groups')?>
	<div class="grid_12 divider">&nbsp;</div>
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="grid_12 post">
		<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'phpms' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	    <div class="grid_1 alpha data"><span class="dia"><?php the_time('d') ?></span><br><span class="mes"><?php the_time('M') ?></span><br><span class="hora"><?php the_time('H\h i') ?></span></div>
	    <div class="grid_10 alpha"><?php the_excerpt(); ?></div>
	 </div>
  	<div class="clear"></div>
<?php endwhile; // End the loop. Whew. ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <div href="#" class="grid_4 link-mais"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'phpms' ) ); ?></div>
  <div href="#" class="grid_4 push_4 link-mais"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'phpms' ) ); ?></div>
<?php endif; ?>
  <div class="clear"></div>
  <div class="grid_12 divider">&nbsp;</div>
<?php echo get_template_part('groups')?>
<div class="grid_12 divider">&nbsp;</div>