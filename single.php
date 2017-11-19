
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <?php if ( has_post_thumbnail() ): ?>
      <p>TODO: IMAGE</p>
    <?php endif ?>
    <h3><?php the_title(); ?></h3>
    <p><i><?php the_time('F j, Y'); ?></i></p>
    <?php the_content(); ?>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
