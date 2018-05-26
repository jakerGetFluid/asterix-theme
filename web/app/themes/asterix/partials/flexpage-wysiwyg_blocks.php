<?php

$columns = get_sub_field('subtext_wysiwyg_columns');
$columnsTitle = get_sub_field('subtext_wysiwyg_section_title');
$wysiwygFull = get_sub_field('subtext_row_settings')['subtext_row_full_width'];
$wysiwygMargin = get_sub_field('subtext_row_settings')['subtext_row_margin'];
$wysiwygMarginTop = $wysiwygMargin['subtext_row_margin_top'];
$wysiwygMarginBottom = $wysiwygMargin['subtext_row_margin_bottom'];
$wysiwygPadding = get_sub_field('subtext_row_settings')['subtext_row_padding'];
$wysiwygPaddingTop = $wysiwygPadding['subtext_row_padding_top'];
$wysiwygPaddingBottom = $wysiwygPadding['subtext_row_padding_bottom'];
$wysiwygClasses = get_sub_field('subtext_row_settings')['subtext_row_class_names'];
$wysiwygBg = get_sub_field('subtext_row_settings')['subtext_row_background'];
$wysiwygBgColor = $wysiwygBg['subtext_row_background_color'];
$wysiwygText = $wysiwygBg['subtext_row_text_color'];
$wysiwygBgOverlay = $wysiwygBg['subtext_row_background_overlay'];

if($wysiwygFull) : ?>
  <div class="wysiwyg-section grid-container full<?php echo $wysiwygClasses ? ' '.$wysiwygClasses : ''; ?><?php echo $wysiwygBgOverlay ? ' bg-overlay' : ''; ?>" style="background-color:<?php echo $wysiwygBgColor ? $wysiwygBgColor : '#ffffff'; ?>;<?php echo $wysiwygMarginTop ? 'margin-top:'.$wysiwygMarginTop.'px;' : ''; ?><?php echo $wysiwygMarginBottom ? 'margin-bottom:'.$wysiwygMarginBottom.'px;' : ''; ?><?php echo $wysiwygPaddingTop ? 'padding-top:'.$wysiwygPaddingTop.'px;' : ''; ?><?php echo $wysiwygPaddingBottom ? 'padding-bottom:'.$wysiwygPaddingBottom.'px;' : ''; ?>">
    <div class="content text-<?php echo $wysiwygText; ?><?php if($wysiwygBg){echo ' padding-vertical';} ?>">
<?php 
else : ?>
    <div class="wysiwyg-section content text-<?php echo $wysiwygText; ?><?php if($wysiwygBgColor && $wysiwygBgColor != '#ffffff'){echo ' padding-all';} ?><?php echo $wysiwygClasses ? ' '.$wysiwygClasses : ''; ?><?php echo $wysiwygBgOverlay ? ' bg-overlay' : ''; ?>" style="background-color:<?php echo $wysiwygBgColor ? $wysiwygBgColor : '#ffffff'; ?>;<?php echo $wysiwygMarginTop ? 'margin-top:'.$wysiwygMarginTop.'px;' : ''; ?><?php echo $wysiwygMarginBottom ? 'margin-bottom:'.$wysiwygMarginBottom.'px;' : ''; ?><?php echo $wysiwygPaddingTop ? 'padding-top:'.$wysiwygPaddingTop.'px;' : ''; ?><?php echo $wysiwygPaddingBottom ? 'padding-bottom:'.$wysiwygPaddingBottom.'px;' : ''; ?>">
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
  $twoColOneContent = get_sub_field('subtext_wysiwyg_two_column_section')['subtext_wysiwyg_two_column_one'];
  $twoColOneSettings = $twoColOneContent['subtext_column_settings'];
  $twoColOneBg = $twoColOneSettings['subtext_column_background'];
  $twoColOneBgType = $twoColOneBg['subtext_column_background_type'];
  $twoColOneBgColor = $twoColOneBg['subtext_column_background_color'];
  $twoColOneBgImg = $twoColOneBg['subtext_column_background_image'];
  $twoColTwoContent = get_sub_field('subtext_wysiwyg_two_column_section')['subtext_wysiwyg_two_column_two'];
  $twoColTwoSettings = $twoColTwoContent['subtext_column_settings'];
  $twoColTwoBg = $twoColTwoSettings['subtext_column_background'];
  $twoColTwoBgType = $twoColTwoBg['subtext_column_background_type'];
  $twoColTwoBgColor = $twoColTwoBg['subtext_column_background_color'];
  $twoColTwoBgImg = $twoColTwoBg['subtext_column_background_image'];
  $columnSpacing = get_sub_field('subtext_wysiwyg_space_between_columns');
  //print_r($twoColOneSettings);
  ?>
  <div class="grid-x<?php echo $columnSpacing ? ' grid-margin-x' : ''; ?>">
  <?php    
  if($twoColStructure == '1-3'): ?>
    <div class="cell medium-6 large-3" style="<?php if($twoColOneBgType == 'bgcolor'){echo 'background-color:'.$twoColOneBgColor.';';} ?><?php if($twoColOneBgType == 'bgimg'){echo 'background-image:url('.$twoColOneBgImg.');';} ?>"><?php echo $twoColOneContent['subtext_wysiwyg_two_column_one_content']; ?></div>
    <div class="cell medium-6 large-9" style="<?php if($twoColTwoBgType == 'bgcolor'){echo 'background-color:'.$twoColTwoBgColor.';';} ?><?php if($twoColTwoBgType == 'bgimg'){echo 'background-image:url('.$twoColTwoBgImg.');';} ?>"><?php echo $twoColTwoContent['subtext_wysiwyg_two_column_two_content']; ?></div>
  <?php
  elseif($twoColStructure == '1-2'): ?>
    <div class="cell medium-6 large-4" style="<?php if($twoColOneBgType == 'bgcolor'){echo 'background-color:'.$twoColOneBgColor.';';} ?><?php if($twoColOneBgType == 'bgimg'){echo 'background-image:url('.$twoColOneBgImg.');';} ?>"><?php echo $twoColOneContent['subtext_wysiwyg_two_column_one_content']; ?></div>
    <div class="cell medium-6 large-8" style="<?php if($twoColTwoBgType == 'bgcolor'){echo 'background-color:'.$twoColTwoBgColor.';';} ?><?php if($twoColTwoBgType == 'bgimg'){echo 'background-image:url('.$twoColTwoBgImg.');';} ?>"><?php echo $twoColTwoContent['subtext_wysiwyg_two_column_two_content']; ?></div>
  <?php
  elseif($twoColStructure == '2-2'): ?>
    <div class="cell medium-6" style="<?php if($twoColOneBgType == 'bgcolor'){echo 'background-color:'.$twoColOneBgColor.';';} ?><?php if($twoColOneBgType == 'bgimg'){echo 'background-image:url('.$twoColOneBgImg.');';} ?>"><?php echo $twoColOneContent['subtext_wysiwyg_two_column_one_content']; ?></div>
    <div class="cell medium-6<?php echo $columnSpacing ? '' : ' padding-all'; ?>" style="<?php if($twoColTwoBgType == 'bgcolor'){echo 'background-color:'.$twoColTwoBgColor.';';} ?><?php if($twoColTwoBgType == 'bgimg'){echo 'background-image:url('.$twoColTwoBgImg.');';} ?>"><?php echo $twoColTwoContent['subtext_wysiwyg_two_column_two_content']; ?></div>
  <?php
  elseif($twoColStructure == '2-1'): ?>
    <div class="cell medium-6 large-8" style="<?php if($twoColOneBgType == 'bgcolor'){echo 'background-color:'.$twoColOneBgColor.';';} ?><?php if($twoColOneBgType == 'bgimg'){echo 'background-image:url('.$twoColOneBgImg.');';} ?>"><?php echo $twoColOneContent['subtext_wysiwyg_two_column_one_content']; ?></div>
    <div class="cell medium-6 large-4" style="<?php if($twoColTwoBgType == 'bgcolor'){echo 'background-color:'.$twoColTwoBgColor.';';} ?><?php if($twoColTwoBgType == 'bgimg'){echo 'background-image:url('.$twoColTwoBgImg.');';} ?>"><?php echo $twoColTwoContent['subtext_wysiwyg_two_column_two_content']; ?></div>
  <?php
  elseif($twoColStructure == '3-1'): ?>
    <div class="cell medium-6 large-9" style="<?php if($twoColOneBgType == 'bgcolor'){echo 'background-color:'.$twoColOneBgColor.';';} ?><?php if($twoColOneBgType == 'bgimg'){echo 'background-image:url('.$twoColOneBgImg.');';} ?>"><?php echo $twoColOneContent['subtext_wysiwyg_two_column_one_content']; ?></div>
    <div class="cell medium-6 large-3" style="<?php if($twoColTwoBgType == 'bgcolor'){echo 'background-color:'.$twoColTwoBgColor.';';} ?><?php if($twoColTwoBgType == 'bgimg'){echo 'background-image:url('.$twoColTwoBgImg.');';} ?>"><?php echo $twoColTwoContent['subtext_wysiwyg_two_column_two_content']; ?></div>
  <?php
  endif;
  ?>
  </div>
<?php
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