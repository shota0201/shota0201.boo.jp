<!DOCTYPE html>
<html lang="ja">
  <!-- head-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,follow">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="GINZA,DAIMARU,MATSUZAKAYA">
    <meta name="description" content="銀座6丁目【GINZA SIX】2階の吹き抜け空間下の150坪のロケーションに、大丸松坂屋百貨店がコンセプトストア【SIXIEME GINZA（シジェーム ギンザ）】">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-sp.png" sizes="180x180">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-sp.png" sizes="192x192">
    <link rel="stylesheet" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <div class="container result" id="top-wrapper">
        <!-- gnav-->
        <header>
          <div class="inner clearfix">
            <h1 class="header-logo">
              <?php the_custom_logo(); ?>
            </h1>
            <div id="nav_toggle">
              <div class="nav_toggle-block">
                <span class="nav_toggle-item"></span>
                <span class="nav_toggle-item"></span>
                <span class="nav_toggle-item"></span>
              </div>
            </div>
            <nav>
              <ul class="gnav-item gnav-item-sp">
              <?php wp_nav_menu( array(
                'theme_location'=>'mainmenu',
                'container'     =>'',
                'menu_class'    =>'',
                'items_wrap'    =>'%3$s'));
              ?>
                <li class="gnav-item-boder">
                  <hr class="gnav-access">
                </li>
                <li class="gnav-item-sns">
                  <a class="gnav-link-tw" href="https://https://twitter.com" target="_blank">
                    <i class="fab gnav-link-icon-tw"></i>
                  </a>
                </li>
                <li class="gnav-item-sns">
                  <a class="gnav-link-fb" href="https://www.facebook.com" target="_blank">
                    <i class="fab gnav-link-icon-fb"></i>
                  </a>
                </li>
                <li class="gnav-item-sns gnav-item-ig">
                  <a class="gnav-link-ig" href="https://www.instagram.com" target="_blank">
                    <i class="fab gnav-link-icon-ig"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </header>