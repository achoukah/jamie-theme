<?php get_header(); ?>

  <article>
    <section>
      <?php if (have_posts()) :

        while (have_posts()) : the_post(); ?>
        <div class="post">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_content(); ?>
        </div>

        <?php endwhile; ?>

        <?php else : ?>
        <h1>Oops!</h1>
        <p>Sorry, but you are looking for something that isn't here.</p>

      <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
  </article>
<?php get_footer(); ?>