<?php
// Main header
?>
<!doctype html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <meta name="robots" content="index, follow">
    <meta name="author" content="Anwar Choukah, Jamie Griffin">

    <link href='http://fonts.googleapis.com/css?family=Work+Sans:100,200,400,600,800|Source+Code+Pro:300' rel='stylesheet' type='text/css'>

    <link href="<?php bloginfo(‘atom_url’); ?>" rel="alternate" type="application/rss+xml" title="RSS Feed - Jamie Griffin's Griff Monkey">

    <!-- Google Analytics to go here -->

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="main-header">    
      <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
      </div>

      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Griff<strong>monkey</strong></a></h1>



      <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search search-header">
        <fieldset>
          <label for="search">Search</label>
          <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search">
          <input type="submit" name="submit" value="Search">
        </fieldset>
      </form>

    </header>

    <nav class="main-menu" id="menu">
      <ul>
        <li <?php if(is_home()) { ?> class="current-cat"<?php } ?>>
        <a href="<?php bloginfo('home'); ?>">Home</a></li>
        <?php wp_list_categories('title_li=&orderby=id'); ?>
      </ul>
    </nav>
    
    <input type="checkbox" id="nav-trigger" class="nav-trigger" />
    <label for="nav-trigger"></label>

    
    