<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<!-- 
==============================================================
||  CSSTips Theme v1.0                                      ||
||  By Araz Gholami (@heshzad) <info@arazgholami.com> ||
||  All right reserved.                                     ||
==============================================================
-->
    <head>
        <title>
        <?php
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo "";
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
          ?>
        </title>
        <!-- MetaTags -->
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="author" content="<?php the_author_meta('nickname','1'); ?>">
        <meta name="keywords" content="<?php $posttags = get_the_tags(); if ($posttags) {foreach($posttags as $tag) {echo ",".$tag->name;}}?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="robots" content="index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Favicon -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <!-- Javascripts -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
    </head>
    <body>
    <!-- Navbar -->
    <div class="navbar navbar-fixed" role="navigation">
      <div class="container">
        <div class="navbar-header">
             <form id="subscription" class="input-group" role="search" action="/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)" method="post">
                <button class="btn glyphicon glyphicon-envelope" type="submit" ></button>
                <input class="form-control" type="email" name="text" oninvalid="setCustomValidity('لطفا یک ایمیل معتبر وارد نمایید.')"
                    onchange="try{setCustomValidity('')}catch(e){}" 
                    type="email" required name="ne" placeholder="خبرنامه ایمیلی" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue">
            </form> 
        </div>
         <div id="socials" class="input-group">
           <a href="https://facebook.com/csstipsir"><button id="sc-fb" class="btn btn"><i class="fa fa-facebook"></i></button></a>
           <a href="https://twitter.com/csstipsir"><button id="sc-tw" class="btn"><i class="fa fa-twitter"></i></button></a>
           <a href="https://google.com/+csstipsir"><button id="sc-plus" class="btn"><i class="fa fa-google-plus"></i></button></a>
        </div> 
        </div>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" id="header">
        <h1>نکات کاربردی در طراحی <span>رابط کاربری</span></h1>
        <p><?php bloginfo('description'); ?></p>
        <form id="searchbox" class="input-group input-group-lg" role="search" action="<?php bloginfo('home'); ?>">
            <button class="btn-lg glyphicon glyphicon-search" type="submit" title="بگرد"></button>
            <input class="form-control" type="text" name="s" placeholder="کلیدواژه مورد نظر را جستجو کنید" autofocus>
        </form> 
      </div>
    </div>