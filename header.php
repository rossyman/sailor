<!doctype html>
<html lang="en">
	<head prefix="og: http://ogp.me/ns#">

		<!-- Header Configuration -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Article / Page's Title -->
		<title><?php echo site_name(); ?> - <?php echo page_title('Page can’t be found'); ?></title>

		<!-- Article / Page's Description and Generator -->
		<meta name="description" content="<?php echo site_description(); ?>">
		<meta name="generator" content="Anchor CMS">

		<!-- Website's stylesheets -->
		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>" media="none" onload="if(media!='all')media='all'">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>" media="none" onload="if(media!='all')media='all'">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="none" onload="if(media!='all')media='(max-width: 830px)'">
		<link rel="stylesheet" href="<?php echo theme_url('/css/emoji.css'); ?>" media="none" onload="if(media!='all')media='all'">
		<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" media="none" onload="if(media!='all')media='all'">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300" media="none" onload="if(media!='all')media='all'">

		<noscript>
		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 830px)">
		<link rel="stylesheet" href="<?php echo theme_url('/css/emoji.css'); ?>">
		<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300">
		</noscript>

		<!-- Link to RSS feed and Icon -->
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Website's scripts -->
		<script>var base = '<?php echo theme_url(); ?>';</script>

		<!-- Objectify website's content -->
	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="WebSite">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<header id="top">
				<div class="wrap">
					<a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>"><img id="logo" src="<?php echo theme_url('/img/logo.png'); ?>" alt="<?php echo site_name(); ?>" /></a>

					<div id="navLinks">
						<ul>
							<?php if(has_menu_items()):
								while(menu_items()): ?>
							<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
								<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
									<?php echo menu_name(); ?>
								</a>
							</li>
							<?php endwhile;
								endif; ?>
						</ul>
					</div>
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<input type="search" id="term" name="term" placeholder="Search" value="<?php echo search_term(); ?>">
						<input type="hidden" id="whatSearch" name="whatSearch" value="all" />
					</form>
					<div id="headliner">
						<h1><?php echo page_title('Page can’t be found'); ?></h1>
					</div>
				</div>
			</header>
