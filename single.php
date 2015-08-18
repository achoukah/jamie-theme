<?php get_header(); ?>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>     

        <article>
          <section>
              <div class="post">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                
                <div class="article-meta">
                  <?php echo get_the_category_list() ?>
                  <?php echo the_tags(); ?>
                </div>


              <?php //Comment form
              comments_template('/partials/comments.php'); ?>
              
            </div>
          </section>
          <?php get_sidebar(); ?>
        </article>

        

        <?php endwhile; ?>

      <?php else : ?>
        <section>
          <div class="inner">
            <h1>Oops!</h1>
            <p>Sorry, but you are looking for something that isn't here.</p>
          </div>
        </section>
      <?php endif; ?>
      
      

<?php get_footer(); ?>