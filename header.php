<?php
// Main header
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title><?php wp_title(); ?></title>

    <meta name="robots" content="index, follow">
    <meta name="author" content="Anwar Choukah, Jamie Griffin">

    <link href='http://fonts.googleapis.com/css?family=Work+Sans:100,200,400,600,800|Source+Code+Pro:300' rel='stylesheet' type='text/css'>

    <!-- Google Analytics to go here -->

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="main-header">    
      <div class="logo"></div>

      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Griff<strong>monkey</strong></a></h1>

      <nav class="main-menu">
      <!-- <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?> -->
      <ul>
        <?php wp_list_categories('exclude=1'); ?>
      </ul>
      </nav>

      <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search">
        <fieldset>
          <label for="search">Search</label>
          <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Enter a keyword or phrase">
          <input type="submit" name="submit" value="Search">
        </fieldset>
      </form>

    </header>