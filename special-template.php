<?php
/* Template Name: special layout */
get_header();
if(have_posts()):
  while(have_posts()): the_post();  ?>
<article class="post page">
  <h2> <?php the_title(); ?></h2>
  <div class="info-box">
    <h4>Disclaimer title</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  </div>
  <p>  <?php the_content(); ?></p>
</article>


<?php endwhile;
else:
  echo "<p> No Content Found</p>";
endif;
get_footer(); ?>