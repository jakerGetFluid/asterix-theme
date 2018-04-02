<?php 
while (have_posts()) : the_post();

  get_template_part('templates/page', 'header');
  get_template_part('templates/content', 'page'); 

  //Flexible Content Groups
  if( have_rows('subtext_content_sections') ): 
    while ( have_rows('subtext_content_sections') ) : the_row();

      //WYSIWYG Columns 
      if( get_row_layout() == 'subtext_wysiwyg_blocks' ): 
        get_template_part('lib/flex-includes/wysiwyg_blocks'); 
      endif;

    endwhile;
  endif;

endwhile; 
?>