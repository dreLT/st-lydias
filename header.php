<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>

    <script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery-1.11.3.min.js"></script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-17942344-1', 'auto');
      ga('send', 'pageview');
    </script>

	</head>

  <?php if ( is_home() ): ?>
  <body class="events">
  <?php else: ?>
	<body <?php body_class(); ?>
  <?php endif; ?>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo-container">
            <a href="<?php echo home_url(); ?>">
  						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo header-image">
  					</a>

            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-text.gif" alt="Saint Lydia's" class="logo-text header-image">
            </a>
          </div>

          <!-- heading illustration to right of logo -->
          <div class="header-illustration header-image"></div>

					<!-- nav -->
					<nav class="site-nav" role="navigation">
						<ul>
              <li><a href="<?php echo get_site_url(); ?>/about/">About</a></li>
              <li><a href="<?php echo get_site_url(); ?>/worship/">Worship</a></li>
              <li><a href="<?php echo get_site_url(); ?>/co-working/">Co-work</a></li>
              <li><a href="<?php echo get_site_url(); ?>/events/">Events</a></li>
              <li><a href="<?php echo get_site_url(); ?>/learn/">Learn</a></li>
              <li><a href="<?php echo get_site_url(); ?>/support/">Support</a></li>
              <li><a href="<?php echo get_site_url(); ?>/visit/">Visit</a></li>
              <li><a href="<?php echo get_site_url(); ?>/faq/">FAQ</a></li>
            </ul>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
