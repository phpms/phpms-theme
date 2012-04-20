<?php
/**
 * The Template for displaying all single pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="grid_12 post" id="post-<?php the_ID(); ?>">
				<h1 class="grid_12 titulo-grande"><?php the_title(); ?></h1>
    <div class="grid_1 alpha data"><span class="dia"><?php the_time('d') ?></span><br><span class="mes"><?php the_time('M') ?></span><br><span class="hora"><?php the_time('H\h i') ?></span></div>
    <div class="grid_10 alpha"><?php the_content(); ?>
  </div>
  </div>
  <div class="clear"></div>
  <div href="#" class="grid_4 link-mais"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', '' ) . '</span> %title' ); ?></div>
  <div href="#" class="grid_4 push_4 link-mais"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', '' ) . '</span>' ); ?></div>
  <div class="clear"></div>
  <?php comments_template( '', true ); ?>
  <div class="clear"></div>
  <div class="grid_12 divider">&nbsp;</div>
<?php
				get_template_part( 'groups');
?>

<?php endwhile; // end of the loop. ?><div class="grid_12 divider">&nbsp;</div>
<?php get_footer(); ?>
