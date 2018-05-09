<?php

$columns = get_sub_field('subtext_wysiwyg_columns');
$columnsTitle = get_sub_field('subtext_wysiwyg_section_title');
$wysiwygFull = get_sub_field('subtext_wysiwyg_full_width');
$wysiwygBg = get_sub_field('subtext_wysiwyg_background_color');
$wysiwygText = get_sub_field('subtext_wysiwyg_text_color');

if($wysiwygFull) : ?>
  <div class="grid-container full" style="background-color:<?php echo $wysiwygBg ? $wysiwygBg : '#ffffff'; ?>;">
    <div class="content<?php echo ($wysiwygText == 'dark') ? ' text-dark' : ' text-light'; ?><?php if($wysiwygBg){echo ' padding-vertical';} ?>">
<?php 
else : ?>
    <div class="content<?php echo ($wysiwygText == 'dark') ? ' text-dark' : ' text-light'; ?><?php if($wysiwygBg){echo ' padding-all';} ?>" style="background-color:<?php echo $wysiwygBg ? $wysiwygBg : '#ffffff'; ?>;">
<?php
endif;

if($columnsTitle) {
  echo '<h2>'.$columnsTitle.'</h2>';
}

if($columns == '1'): 
  $oneColContent = get_sub_field('subtext_wysiwyg_one_column_section');
?>
  <div class="grid-x">
    <div class="cell"><?php echo $oneColContent['subtext_wysiwyg_one_column_content']; ?></div>
  </div>
<?php  
elseif ($columns == '2'):
  $twoColStructure = get_sub_field('subtext_wysiwyg_two_column_layout');
  $twoColContent = get_sub_field('subtext_wysiwyg_two_column_section');

  if($twoColStructure == '1-3'): ?>
    <div class="grid-x grid-margin-x">
      <div class="cell medium-6 large-3"><?php echo $twoColContent['subtext_wysiwyg_two_column_one_content']; ?></div>
      <div class="cell medium-6 large-9"><?php echo $twoColContent['subtext_wysiwyg_two_column_two_content']; ?></div>
    </div>
  <?php
  elseif($twoColStructure == '1-2'): ?>
    <div class="grid-x grid-margin-x">
      <div class="cell medium-6 large-4"><?php echo $twoColContent['subtext_wysiwyg_two_column_one_content']; ?></div>
      <div class="cell medium-6 large-8"><?php echo $twoColContent['subtext_wysiwyg_two_column_two_content']; ?></div>
    </div>
  <?php
  elseif($twoColStructure == '2-2'): ?>
    <div class="grid-x grid-margin-x">
      <div class="cell medium-6"><?php echo $twoColContent['subtext_wysiwyg_two_column_one_content']; ?></div>
      <div class="cell medium-6"><?php echo $twoColContent['subtext_wysiwyg_two_column_two_content']; ?></div>
    </div>
  <?php
  elseif($twoColStructure == '2-1'): ?>
    <div class="grid-x grid-margin-x">
      <div class="cell medium-6 large-8"><?php echo $twoColContent['subtext_wysiwyg_two_column_one_content']; ?></div>
      <div class="cell medium-6 large-4"><?php echo $twoColContent['subtext_wysiwyg_two_column_two_content']; ?></div>
    </div>
  <?php
  elseif($twoColStructure == '3-1'): ?>
    <div class="grid-x grid-margin-x">
      <div class="cell medium-6 large-9"><?php echo $twoColContent['subtext_wysiwyg_two_column_one_content']; ?></div>
      <div class="cell medium-6 large-3"><?php echo $twoColContent['subtext_wysiwyg_two_column_two_content']; ?></div>
    </div>
  <?php
  endif;

elseif($columns == '3'):
  $threeColStructure = get_sub_field('subtext_wysiwyg_three_column_layout');
  $threeColContent = get_sub_field('subtext_wysiwyg_three_column_section');

  if($threeColStructure == '1-1-1'): ?>
    <div class="grid-x grid-margin-x">
      <div class="cell medium-4"><?php echo $threeColContent['subtext_wysiwyg_three_column_one_content']; ?></div>
      <div class="cell medium-4"><?php echo $threeColContent['subtext_wysiwyg_three_column_two_content']; ?></div>
      <div class="cell medium-4"><?php echo $threeColContent['subtext_wysiwyg_three_column_three_content']; ?></div>
    </div>
  <?php
  elseif($threeColStructure == '1-2-1'): ?>
    <div class="grid-x grid-margin-x">
      <div class="cell medium-3"><?php echo $threeColContent['subtext_wysiwyg_three_column_one_content']; ?></div>
      <div class="cell medium-6"><?php echo $threeColContent['subtext_wysiwyg_three_column_two_content']; ?></div>
      <div class="cell medium-3"><?php echo $threeColContent['subtext_wysiwyg_three_column_three_content']; ?></div>
    </div>
  <?php
  endif;
  
elseif($columns == '4'):
  $fourColContent = get_sub_field('subtext_wysiwyg_four_column_section'); ?>
  
  <div class="grid-x grid-margin-x">
    <div class="cell medium-6 large-3"><?php echo $fourColContent['subtext_wysiwyg_four_column_one_content']; ?></div>
    <div class="cell medium-6 large-3"><?php echo $fourColContent['subtext_wysiwyg_four_column_two_content']; ?></div>
    <div class="cell medium-6 large-3"><?php echo $fourColContent['subtext_wysiwyg_four_column_three_content']; ?></div>
    <div class="cell medium-6 large-3"><?php echo $fourColContent['subtext_wysiwyg_four_column_four_content']; ?></div>
  </div>
<?php  
endif;

if($wysiwygFull) : ?>
    </div>
  </div>
<?php 
else : ?>
  </div>
<?php
endif;
?>