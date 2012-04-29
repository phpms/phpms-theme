<?php
/*
Template Name: 1_Conf
*/

$tmplDir = get_bloginfo('template_directory');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <title>1ª PHPMS Conf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="1ª PHPMS Conf">
    <meta name="author" content="PHPMS">

    <link href='http://fonts.googleapis.com/css?family=Graduate|Vast+Shadow' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/1_conf.css" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?php echo $tmplDir; ?>/images/favicon.ico">
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="container">
      <div id="header" class="row">
        <div class="span2 rupestre">
          <img src="<?php echo $tmplDir; ?>/images/elefante.png" width="100px" height="100px" />
        </div>
        <div class="span8 titulo">
          <h1><a href="<?php echo home_url(); ?>/1-phpms-conf" title="Home da 1ª PHPMS Conf">1ª PHPMS Conf</a></h1>
          <h2>8 e 9 de Junho no SENAC MS</h2>
        </div>
        <div class="span2 rupestre">
          <img src="<?php echo $tmplDir; ?>/images/capivara.png" width="100px" height="100px" />
        </div>
      </div>

      <?php wp_nav_menu( array('menu' => '1-phpms-conf', 'menu_class' => 'menu row','container' => false) ); ?>

      <div id="main" class="row">
        <div class="span9">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <div class="post" id="post-<?php the_ID(); ?>">


            <?php the_content(); ?>
          </div>
          <?php endwhile;?>
        </div>

        <div id="sidebar" class="span3">
          <div class="row">
            <h2>Realização</h2>
            <a href="http://phpms.org" title="Grupo de Desenvolvedores PHP de Mato Grosso do Sul"><img src="<?php echo $tmplDir; ?>/images/phpms.png" alt="Logo do PHPMS" /></a>
          </div>
          <div class="row">
            <h2>Patrocínio</h2>
            <?php dynamic_sidebar( '1-conf-sponsors-widget' ); ?>
          </div>
          <div class="row">
            <h2>Apoio</h2>
            <?php dynamic_sidebar( '1-conf-support-widget' ); ?>
          </div>
        </div>
      </div>

      <hr>

      <footer>
        <p>1ª PHPMSConf - PHPMS 2012</p>
      </footer>

    </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>