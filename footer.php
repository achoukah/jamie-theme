<?php
//Main footer
?>

    <footer class="main-footer">      

      

      <ul>
        <li>
          <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search search-footer">
            <fieldset>
              <label for="search">Search</label>
              <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search">
              <input type="submit" name="submit" value="Search">
            </fieldset>
          </form>
        </li>
        <li>&copy;<?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Jamie Griffin</a></li>
        <li>Theme design/coding: <a href="http://anwarchoukah.com">Anwar Choukah</a></li>

      </ul>

    </footer>

    <div class="no-jsmsg">
    <p>You currently have JavaScript disabled. This site requires JavaScript to be enabled and some functiomns of the site may not be usable or may not look correct until JavaScript is enabled. You can enable JavaScript by following <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="How to enable JavaScript" rel="nofollow">this tutorial</a>.</p>
    </div>

    <!--[if lt IE 8]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

    <script>
      //Use as required
      //var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <?php wp_footer(); ?>
  </body>
</html>   
