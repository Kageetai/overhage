<?php
if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
/****************************************************
 *
 * @File:        template.php
 * @Package:        GetSimple
 * @Action:        Ma theme for GetSimple CMS
 *
 *****************************************************/
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>
    <?php get_header(); ?>
    <meta name="robots" content="index, follow"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link href="<?php get_theme_url(); ?>/css/app.css" media="screen, projector, print" rel="stylesheet"
          type="text/css"/>
    <script src="<?php get_theme_url(); ?>/js/vendor/custom.modernizr.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php get_theme_url(); ?>/js/jquery.cycle.lite.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        //        $(function () {
        //			$('#slides').cycle({
        //				fit : 1,
        ////                width: 100%,
        ////                height: 100%,
        //				nowrap : 1,
        //				random : 1,
        //				speed : 5000,
        //				timeout : 5000
        //			});

        // set heights to window height
        //			$('#slides > div').width($(window).width()-$('#left').width());
        //			$('#slides > div, .trans-vert').height($(window).height());
        //			$(window).resize(function() {
        //				$('#slides > div').width($(window).width()-$('#left').width());
        //				$('#slides > div, .trans-vert').height($(window).height());
        //			});
        //        });
    </script>
</head>
<body id="<?php get_page_slug(); ?>">

<div id="header">
    <!--    <div class="headerbox">-->
    <a class="headertext" href="<?php get_site_url(); ?>">
        <p>Dietmar Overhage</p>

        <p class="subheader">Malermeisterbetrieb</p>
    </a>
    <a class="headerlogo" href="<?php get_site_url(); ?>">
        <!--            <img src="-->
        <?php //get_theme_url(); ?><!--/img/Logo_MalermeisterOverhage_petrol.png" width="550px" alt="-->
        <?php //get_site_name(); ?><!--" />-->
    </a>
    <!--    </div>-->
</div>

<div id="wrapper">

    <div id="left">
        <ul id="nav">
            <?php get_navigation(return_page_slug()); ?>
        </ul>
    </div>

    <section id="content">
        <article class="page-text">
            <?php get_page_content(); ?>
        </article>
    </section>

    <section id="right">
        <?php //get_component('slides'); ?>
        <?php include('slides.inc.php'); ?>
    </section>

    <!--	<div class="clear"></div>-->

    <?php get_footer(); ?>

</div>

<script>
    document.write('<script src=' +
        ('__proto__' in {} ? '<?php get_theme_url(); ?>/js/vendor/zepto' : '<?php get_theme_url(); ?>/js/vendor/jquery') +
        '.js><\/script>')
</script>
<script src="<?php get_theme_url(); ?>/js/foundation/foundation.js"></script>
<!--<script src="js/foundation/foundation.alerts.js"></script>-->
<!--<script src="js/foundation/foundation.clearing.js"></script>-->
<!--<script src="js/foundation/foundation.cookie.js"></script>-->
<!--<script src="js/foundation/foundation.dropdown.js"></script>-->
<!--<script src="js/foundation/foundation.forms.js"></script>-->
<!--<script src="js/foundation/foundation.joyride.js"></script>-->
<!--<script src="js/foundation/foundation.magellan.js"></script>-->
<!--<script src="js/foundation/foundation.orbit.js"></script>-->
<!--<script src="js/foundation/foundation.placeholder.js"></script>-->
<!--<script src="js/foundation/foundation.reveal.js"></script>-->
<!--<script src="js/foundation/foundation.section.js"></script>-->
<!--<script src="js/foundation/foundation.tooltips.js"></script>-->
<!--<script src="js/foundation/foundation.topbar.js"></script>-->
<script>
    $(document).foundation();
//    $('.slide').height($('#content').height())
    $('#slides').cycle({
        fit: 1,
        nowrap: 1,
        random: 1,
        speed: 5000,
        timeout: 5000
    });
</script>

</body>
</html>