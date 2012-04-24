<?php
/*
Template Name: 1_Conf
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/1_conf.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

</style>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container_12 content">
  <div id="header" role="banner">
    <div id="headerimg">
      <h1><a href="<?php echo home_url(); ?>/1-phpms-conf">1º PHPMS Conf</a></h1>
    </div>
  </div>
  <hr />

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div class="grid_12 post" id="post-<?php the_ID(); ?>">
    <h1 class="grid_12 titulo-grande"><?php the_title(); ?></h1>

    <div class="grid_10 alpha"><?php the_content(); ?></div>
  </div>

  <div class="clear"></div>

  <?php endwhile;?>

  <div class="clear"></div>

  <?php comments_template( '', true ); ?>


  <div class="grid_12 divider">&nbsp;</div>