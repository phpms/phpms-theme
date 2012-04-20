<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php
				get_template_part( 'groups');
?>
  <div class="grid_12 divider">&nbsp;</div>
  <div class="clear"></div>
  <h1 class="grid_12 titulo-grande">Notícias</h1>
<?php
	query_posts('posts_per_page=2');
 	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="grid_6 post">
			    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			    <div class="grid_1 alpha data"><span class="dia"><?php the_time('d') ?></span><br><span class="mes"><?php the_time('M') ?></span><br><span class="hora"><?php the_time('H\h i') ?></span></div>
			    <div class="grid_4 alpha"><?php the_excerpt(); ?></div>
			</div>
<?php endwhile; // end of the loop. ?>
  <div class="clear"></div>
  <a href="/category/noticias/" class="grid_6 push_3 link-mais">Veja mais notícias</a>
  <div class="clear"></div>

<?php get_footer(); ?>
