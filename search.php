<?php
/* Search resuts */

//Preserve the search query (for pagination)
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

get_header(); ?>


    <?php if ( have_posts() ) : ?>
    <article>
      <section>

        <?$count = 0; //set up counter variable
        ?>

        <?php while ( have_posts() ) : the_post(); 

        $count++; //increment the variable by 1 each time the loop executes
        ?>
        
          <div class="inner">
            <div class="post">
              <?php if ($wp_query->found_posts == 1) { ?>
              <h1>1 result for <?php echo get_search_query(); ?></h1>
              <?php } else { ?>
              <h1><?php echo $wp_query->found_posts; ?> results for <?php echo get_search_query(); ?></h1>
              <?php } ?>
              <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
              <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('standard_thumbnail');
                }
              ?>
              <?php the_title(); ?></a> <br />

              <?php echo get_the_date('jS F Y'); ?><br />
              <?php the_author_posts_link(); ?> 
            </div>
          </div>

        <?php
          //every 3 items close new row and start a new one
          if ($count % 3 == 0) { ?></div><div class="row"><?php } ?>  

        <?php endwhile; ?>
      </section>
      <?php get_sidebar(); ?>
    </article>
    
    <nav>
      <div class="nav-previous"><?php next_posts_link( 'Previous' ); ?></div>
      <div class="nav-next"><?php previous_posts_link( 'Next' ); ?></div>
    </nav>

    <?php else : ?>
      <article>
        <section>
          <div class="inner">
            <div class="post">
              <?php if ($wp_query->found_posts == 1) { ?>
              <h1>1 result for <?php echo get_search_query(); ?></h1>
              <?php } else { ?>
              <h1><?php echo $wp_query->found_posts; ?> results for <?php echo get_search_query(); ?></h1>
              <?php } ?>
              <p>Sorry, but nothing matched your search criteria.</p>
            </div>
          </div>
        </section>
        <?php get_sidebar(); ?>
      </article>

    <?php endif; ?>

<?php get_footer(); ?>
