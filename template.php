<?php
if (!defined('IN_GS')) { die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File: 		template.php
 * @Package:		GetSimple
 * @Action:		Ma theme for GetSimple CMS
 *
 *****************************************************/
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Site Title -->
	<title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" media="all" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- <script src="<?php get_theme_url(); ?>/js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script> -->
	<script src="<?php get_theme_url(); ?>/js/jquery.cycle.lite.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('#slides').cycle({
				fit : 1,
				nowrap : 1,
				random : 1,
				speed : 5000,
				timeout : 5000
			});
			
			// set heights to window height
			$('#slides > div').width($(window).width()-$('#left').width());
			$('#slides > div, .trans-vert').height($(window).height());
			$(window).resize(function() {
				$('#slides > div').width($(window).width()-$('#left').width());
				$('#slides > div, .trans-vert').height($(window).height());
			});
		});
	</script>
</head>
<body id="<?php get_page_slug(); ?>" >

<div id="wrapper">
	
	<div id="left">
		<div id="header">
			<a class="logo" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
			<ul id="nav">
				<?php get_navigation(return_page_slug()); ?>
			</ul>
		</div><!-- end header -->
		<!-- <div class="trans-hori">&nbsp;</div> -->
		
		<div id="content">
			<div class="page-text">
				<?php get_page_content(); ?>
			</div>
			<!-- <p class="page-meta">zuletzt aktualisiert am &nbsp;<span><?php get_page_date('j.m.Y'); ?></span></p> -->
		</div>
	</div>
		
	<section id="right">
		<?php get_component('slides'); ?>
		<div class="trans-vert">&nbsp;</div>
		<?php include ('slides.inc.php'); ?>
	</section>
	
	<div class="clear"></div>
	
	<?php get_footer(); ?>
	
</div><!-- end wrapper -->
</body>
</html>