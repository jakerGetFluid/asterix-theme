<?php 
$accordionTitle = get_sub_field('subtext_accordion_title');
?>

<div class="content">
  <h2><?php echo $accordionTitle; ?></h2>
  <?php
  if( have_rows('subtext_accordion_parts') ):
    $count = 0;
    echo '<ul class="accordion" data-accordion data-allow-all-closed="true">';

      while ( have_rows('subtext_accordion_parts') ) : the_row(); ?>
        <li class="accordion-item <?php echo !$count ? ' is-active' : ''; ?>" data-accordion-item>
          <a href="#" class="accordion-title"><?php echo get_sub_field('subtext_accordion_section_title'); ?></a>
          <div class="accordion-content" data-tab-content >
            <?php echo get_sub_field('subtext_accordion_section_content'); ?>
          </div>
        </li>    
  <?php
        $count++;
      endwhile;
    echo '</ul>';
  else :
      // no rows found
  endif;

  ?>
</div>