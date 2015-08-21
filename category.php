<?php
/* Category.php - displays all posts in a category */
get_header(); ?>

<?php if ( have_posts() ) : ?>
<article>
  <section>
    <h1><?php echo single_cat_title(); ?></h1>
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
        <li class="date">Published: <?php echo get_the_date('jS F Y'); ?></li>
        <li class="author">By: <?php the_author_posts_link(); ?></li>
      </ul>
    
      <?php
      //every 3 items close new row and start a new one
    if ($count % 3 == 0) { ?>
    <div class="row"><?php } ?>
      <?php endwhile; ?>
    </div><!--/row-->

    <nav>
      <div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
      <div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
    </nav>
    <?php else : ?>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
    
  </section>
  <?php get_sidebar(); ?>
</article>
<?php get_footer(); ?>