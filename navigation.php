<nav class="main-menu" id="menu">
  <ul>
    <li><a  href="<?php bloginfo('home'); ?>">Home</a></li>
    <?php wp_list_categories('orderby=id'); ?>
  </ul>
</nav>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>