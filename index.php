<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div>
        <div><?php the_title(); ?><div>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <?php wp_footer(); ?>
  </body>
</html>
