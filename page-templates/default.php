<?php
/**
 * Template Name: General Page
 * Description: The default page template
 */
get_header(); ?>

      <section>
        <div class="inner">
        <?php if (have_posts()) :

          while (have_posts()) : the_post(); ?>

          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_content(); ?>

          <?php endwhile; ?>

          <?php else : ?>
          <h1>Oops!</h1>
          <p>Sorry, but you are looking for something that isn't here.</p>

        <?php endif; ?>
        </div>
      </section>
<?php get_sidebar(); ?> 
<?php get_footer(); ?>       