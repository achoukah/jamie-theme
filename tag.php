<?php
/** Tag.php displays posts tagged with this tag */

get_header(); ?>

    <article>
      <section id="category-posts">
        <h1><span>Tag:</span> <?php echo single_tag_title(); ?></h1>

        <?php if ( have_posts() ) : ?>




        <?$count = 0; //set up counter variable
        ?>
          
          <?php while ( have_posts() ) : the_post(); 

          $count++; //increment the variable by 1 each time the loop executes
          ?>

          <div class="post">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('standard_thumbnail');
              }
            ?>
            <?php the_title(); ?></a>
            <ul class="category-meta">
              <li><?php echo get_the_date('jS F Y'); ?></li>
              <li><?php the_author_posts_link(); ?></li>
            </ul>
          </div>

        <?php
          //every 3 items close new row and start a new one
          if ($count % 3 == 0) { ?></div><div class="row"><?php } ?>  

        <?php endwhile; ?>


        <?php else : ?>
            <p>Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>     

      </section>
      <?php get_sidebar(); ?>
    </article>

<?php get_footer(); ?>