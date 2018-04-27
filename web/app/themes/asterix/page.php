<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php 
    if( have_rows('subtext_content_sections') ):

        while ( have_rows('subtext_content_sections') ) : the_row();

            if( get_row_layout() == 'subtext_wysiwyg_blocks' ):

              get_template_part('partials/flexpage', 'wysiwyg_blocks');

            /*elseif( get_row_layout() == 'download' ): 

              $file = get_sub_field('file');*/

            endif;

        endwhile;

    else :

        // no layouts found

    endif;
  ?>
<?php endwhile; ?>
