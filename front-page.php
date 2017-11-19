<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>
    <?php the_content(); ?>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
