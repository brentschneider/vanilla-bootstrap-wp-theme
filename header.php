<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Brent Schneider">
    <link rel="icon" href="../../favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right'); ?>
      <?php bloginfo( 'name'); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?> >

    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> web browser. <br />
      It is strongly recomended that you <a href="http://browsehappy.com/">upgrade your browser</a> to improve your web experience.</p>
    <![endif]-->

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url'); ?>"><?php bloginfo( 'name'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
            $args = array(
              'menu'        => 'header-menu',
              'menu_class'  => 'nav navbar-nav',
              'container'   => 'false'
            );
            wp_nav_menu( $args );
          ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
