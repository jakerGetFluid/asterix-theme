<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php
    /*$row_options = get_field('subtext_row_settings');
    $row_margin = $row_options['subtext_row_margin'];
    echo 'Top:'.$row_margin['subtext_row_margin_top'].'px<br>';
    echo 'Right:'.$row_margin['subtext_row_margin_right'].'px<br>';
    echo 'Bottom:'.$row_margin['subtext_row_margin_bottom'].'px<br>';
    echo 'Left:'.$row_margin['subtext_row_margin_left'].'px<br>';
    */
  ?>

<?php endwhile; ?>