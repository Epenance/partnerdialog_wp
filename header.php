<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport" />

  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-43117482-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <!-- Display the main menu -->
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    <!-- Display the main menu -->
  </header>
  <nav id="mainNav">
    <div id="logo">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="100%" /></a>
    </div>

    <!-- Display the main menu -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    <!-- Display the main menu -->
  </nav>
  
