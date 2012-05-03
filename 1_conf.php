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
			<div id="header" class="container-fluid rupestre">
				<div class="span3">
					<img src="<?php echo $tmplDir; ?>/images/elefante.png" width="100px" height="100px" />
				</div>
				<div class="span5">
					<h1><a href="<?php echo home_url(); ?>/1-phpms-conf" title="Home da 1ª PHPMS Conf">1º PHPMS Conf</a></h1>
					<h2 style="font-size: 28px">8 e 9 de Junho no SENAC MS</h2>
				</div>
				<div class="span3">
					<img src="<?php echo $tmplDir; ?>/images/capivara.png" width="100px" height="100px" />
				</div>
			</div>
			<div class="container-fluid">
				<?php wp_nav_menu(array('menu' => '1-phpms-conf', 'menu_class' => 'menu row', 'container' => false)); ?>
			</div>
			<div id="main" class="container-fluid">
				<div class="span8">
					<?php if (have_posts ()) :
						while (have_posts ()) : the_post(); ?>
							<div class="post" id="post-<?php the_ID(); ?>">
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div id="sidebar" class="span3">
						<h3>Realização</h3>
							<a href="http://phpms.org" title="Grupo de Desenvolvedores PHP de Mato Grosso do Sul" target="_blank">
								<img src="<?php echo $tmplDir; ?>/images/phpms.png" alt="Logo do PHPMS" width="80%" />
							</a>
						<h3>Patrocínio</h3>
						<?php dynamic_sidebar('1-conf-sponsors-widget'); ?>
						<h3>Apoio</h3>
						<?php dynamic_sidebar('1-conf-support-widget'); ?>
				</div>
			</div>
			<hr>
			<footer>
				<p>1ª PHPMSConf - PHPMS 2012</p>
			</footer>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>