<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<h1 class="grid_12 titulo-grande"><?php
					printf( __( ' %s', 'phpms' ), '<span>' . single_cat_title( '', false ) . '</span>' );
		?></h1>
				<?php
				get_template_part( 'loop', 'category' );
				?>
<?php get_footer(); ?>
