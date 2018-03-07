<?php 
while (have_posts()) : the_post();

  get_template_part('templates/page', 'header');
  get_template_part('templates/content', 'page'); 

  //Flexible Content Groups
  if( have_rows('subtext_flexible_content') ): 
    while ( have_rows('subtext_flexible_content') ) : the_row();

      //WYSIWYG Columns 
      if( get_row_layout() == 'subtext_wysiwyg_columns' ): 
        get_template_part('lib/flex-includes/wysiwyg_columns'); 
      endif;

    endwhile;
  endif;

endwhile; 
?>