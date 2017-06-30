<!doctype html>
<html lang="<?php echo site_meta('lang', 'en') ?>">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    <!-- Meta configuration -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo site_name() ?> - <?php echo page_title('Page can’t be found') ?></title>

    <!-- Article / Page's Description and Generator -->
    <meta name="description" content="<?php echo site_description() ?>">
    <meta name="generator" content="Anchor CMS">

    <!-- Reference external stylesheets -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
          integrity="sha384-4r9SMzlCiUSd92w9v1wROFY7DlBc5sDYaEBhcCJR7Pm2nuzIIGKVRtYWlf6w+GG4"
          crossorigin="anonymous"
          media="none"
          onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i"
          media="none"
          onload="if(media!='all')media='all'">

    <!-- Reference render-blocking CSS for older no-js browsers -->
    <noscript><link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" integrity="sha384-4r9SMzlCiUSd92w9v1wROFY7DlBc5sDYaEBhcCJR7Pm2nuzIIGKVRtYWlf6w+GG4" crossorigin="anonymous"><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300"><link rel="stylesheet" href="<?php echo theme_url('/css/emoji.css') ?>"></noscript>

    <!-- Reference relative stylesheets -->
    <link rel="stylesheet" href="<?php echo theme_url('/css/reset.css') ?>">
    <link rel="stylesheet" href="<?php echo theme_url('/css/emoji.css') ?>">
    <link rel="stylesheet" href="<?php echo theme_url('/css/style.min.css') ?>">

    <!-- Link to RSS feed and favicon -->
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url() ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png') ?>">

    <!-- Open-graph markup -->
    <?php if (article_title()): ?>
    <meta property="og:title" content="<?php echo article_title() ?>">
    <?php else: ?>
    <meta property="og:title" content="<?php echo site_meta('og_title', site_name()) ?>">
    <?php endif ?><?php if (site_meta('og_type', 'WebSite')): ?>
    <meta property="og:type" content="<?php echo site_meta('og_type', 'WebSite') ?>">
    <?php endif ?>
    <meta property="og:url" content="<?php echo base_url(e(current_url())) ?>">
    <?php if(article_custom_field('social_image', '') !== ''): ?>
    <meta property="og:image" content="<?php echo article_custom_field('social_image', '') ?>">
    <?php else: ?>
    <meta property="og:image" content="<?php echo site_meta('og_image', theme_url('img/og_image.gif')) ?>">
    <?php endif ?>
    <meta property="og:site_name" content="<?php echo site_name() ?>">
    <?php if(article_description()): ?>
    <meta property="og:description" content="<?php echo article_description() ?>">
    <?php else: ?>
    <meta property="og:description" content="<?php echo site_description() ?>">
    <?php endif ?>

    <!-- Twitter card markup -->
    <?php if (site_meta('twitter_card', 'summary_large_image')): ?>
    <meta name="twitter:card" content="<?php echo site_meta('twitter_card', 'summary_large_image') ?>">
    <?php endif ?><?php if (site_meta('twitter_account', twitter_account())): ?>
    <meta name="twitter:site" content="@<?php echo site_meta('twitter_account', twitter_account()) ?>">
    <?php endif ?><?php if(twitter_account() !== ''): ?>
    <meta name="twitter:creator" content="@<?php echo twitter_account() ?>">
    <?php endif ?><?php if (article_title()): ?>
    <meta name="twitter:title" content="<?php echo article_title() ?>">
    <?php else: ?>
    <meta name="twitter:title" content="<?php echo site_meta('og_title', site_name()) ?>">
    <?php endif ?><?php if(article_description()): ?>
    <meta name="twitter:description" content="<?php echo article_description() ?>">
    <?php else: ?>
    <meta name="twitter:description" content="<?php echo site_description() ?>">
    <?php endif ?><?php if(article_custom_field('social_image', '') !== ''): ?>
    <meta name="twitter:image" content="<?php echo article_custom_field('social_image', '') ?>">
    <?php else: ?>
    <meta name="twitter:image" content="<?php echo site_meta('og_image', theme_url('img/og_image.gif')) ?>">
    <?php endif ?>

    <?php if(customised()): ?>
    <!-- Custom CSS -->
    <style><?php echo article_css() ?></style>

    <!--  Custom Javascript -->
    <script><?php echo article_js() ?></script>
    <?php endif ?>

    <!-- Ensure that the preloader is visible on load -->
    <style>.loading-screen { width: 100%; background-color: #ffffff; height: 100vh; position: fixed; z-index: 2; }.loading-screen-inner { margin-top: 50vh; -webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%); }.spinner{margin:40px auto 0;width:70px;text-align:center}.spinner>div{width:12px;height:12px;background-color:#e1e8ed;border-radius:100%;display:inline-block;-webkit-animation:sk-bouncedelay 1.4s infinite ease-in-out both;animation:sk-bouncedelay 1.4s infinite ease-in-out both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes sk-bouncedelay{0%,100%,80%{-webkit-transform:scale(0)}40%{-webkit-transform:scale(1)}}@keyframes sk-bouncedelay{0%,100%,80%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}@-moz-keyframes bounce{0%,20%,50%,80%,100%{-moz-transform:translateY(0);transform:translateY(0)}40%{-moz-transform:translateY(-30px);transform:translateY(-30px)}60%{-moz-transform:translateY(-15px);transform:translateY(-15px)}}@-webkit-keyframes bounce{0%,20%,50%,80%,100%{-webkit-transform:translateY(0);transform:translateY(0)}40%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}60%{-webkit-transform:translateY(-15px);transform:translateY(-15px)}}@keyframes bounce{0%,20%,50%,80%,100%{-moz-transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0);transform:translateY(0)}40%{-moz-transform:translateY(-30px);-ms-transform:translateY(-30px);-webkit-transform:translateY(-30px);transform:translateY(-30px)}60%{-moz-transform:translateY(-15px);-ms-transform:translateY(-15px);-webkit-transform:translateY(-15px);transform:translateY(-15px)}}</style>

    <!-- Require polyfills for older browsers -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha384-qFIkRsVO/J5orlMvxK1sgAt2FXT67og+NyFTITYzvbIP1IJavVEKZM7YWczXkwpB" crossorigin="anonymous"></script>
    <![endif]-->

    <!-- Init anchor and preload -->
    <script>var base = '<?php echo theme_url() ?>';</script>

  </head>
  <body class="<?php echo body_class() ?>">

    <!-- Create preloader -->
    <div class="loading-screen">
      <div class="loading-screen-inner">
        <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>
      </div>
    </div>

    <?php if ((user_authed()) && (user_authed_role() == "administrator")): ?>
    <!-- Admin control panel notification -->
    <div class="logged-in">
        <div class="logged-in-inner">
            <h3>Hello, <?php echo user_authed_name('user') ?>! You are currently logged in. Click <a href="<?php echo base_url('admin') ?>">here</a> to visit your admin panel!</h3>
        </div>
    </div>
    <?php endif ?>

    <!-- Document root -->
    <div class="main-wrap">

      <!-- Navigation section -->
      <header id="top">
        <div class="wrap">
          <a href="<?php echo base_url() ?>" title="<?php echo site_name() ?>" id="logo-top"><img id="logo" src="<?php echo theme_url('/img/logo.png') ?>" alt="<?php echo site_name() ?>" /></a>

          <div id="navLinks">
            <ul>
              <?php if(has_menu_items()):
                  while(menu_items()): ?>
              <li <?php echo (menu_active() ? 'class="active"' : '') ?>>
                <a href="<?php echo menu_url() ?>" title="<?php echo menu_title() ?>">
                  <?php echo menu_name() ?>
                </a>
              </li>
              <?php endwhile;
                  endif; ?>
            </ul>
          </div>

          <!-- Search functionality -->
          <form id="search" action="<?php echo search_url() ?>" method="post">
            <fieldset id="search-mobile">
              <input type="search" id="term" name="term" placeholder="Search" value="<?php echo search_term() ?>">
            </fieldset>
            <input type="hidden" id="whatSearch" name="whatSearch" value="all" />
          </form>
        </div>
      </header>

      <!-- Document headline section -->
      <div id="headliner-wrap">
          <div id="headliner">
              <h1><?php echo page_title('Page can’t be found') ?></h1>
          </div>
      </div>
