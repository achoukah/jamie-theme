<?php
/**
 * Template Name: 404 Template
 * Description: Error page when a page cannot be found
 */
get_header(); ?>
    <article>
      <section class="error-page">
        <div class="post">
          <h1>We're sorry, we cannot find that page!</h1>
          <p>You're seeing this message because:</p>
          <ul>
            <li>The page may have moved</li>
            <li>The page no longer exists</li>
            <li>The link you clicked is incorrect</li>
            <li>You like error messages</li>
          </ul>
  
          <p>Why not search our website using the form below? Alternatively you can visit the <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Homepage">Homepage</a>.</p>
  
          <form class="search search-large" action="<?php echo home_url( '/' ); ?>" method="get">
            <label for="search">Search</label>
            <input id="search" name="s" type="text" value="<?php the_search_query(); ?>" placeholder="Search GRIFFMONKEY">
            <input name="submit" type="submit" value="Search">
          </form>
        </div>
      </section>
      <?php get_sidebar(); ?>
      </article>
  
<?php get_footer(); ?>