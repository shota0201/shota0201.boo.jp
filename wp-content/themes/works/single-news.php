 <?php get_header(); ?>

  <div class="result">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <p class=""><?php the_content(); ?></p>
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>