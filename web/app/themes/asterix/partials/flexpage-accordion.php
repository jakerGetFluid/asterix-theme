<?php 
$accordionOpen = get_sub_field('subtext_accordion_display_on_load');
$accordionExpand = get_sub_field('subtext_accordion_functionality');
$accordionTitle = get_sub_field('subtext_accordion_title');
?>

<div class="content">
  <h2><?php echo $accordionTitle; ?></h2>
  <?php
  if( have_rows('subtext_accordion_parts') ):
    $count = 1; ?>
    <ul class="accordion" data-accordion data-allow-all-closed="true" data-deep-link="true" <?php echo ($accordionExpand == 'multi') ? 'data-multi-expand="true"' : ''; ?>>
    <?php
      while ( have_rows('subtext_accordion_parts') ) : the_row(); ?>
        <li class="accordion-item <?php echo ($count == 1 && $accordionOpen == 'open') ? ' is-active' : ''; ?>" data-accordion-item>
          <a href="#expanded-section-<?php echo $count; ?>" class="accordion-title"><?php echo get_sub_field('subtext_accordion_section_title'); ?></a>
          <div class="accordion-content" data-tab-content id="expanded-section-<?php echo $count; ?>">
            <?php echo get_sub_field('subtext_accordion_section_content'); ?>
          </div>
        </li>    
  <?php
        $count++;
      endwhile; ?>
    </ul>
  <?php
  else :
      // no rows found
  endif;

  ?>
</div>