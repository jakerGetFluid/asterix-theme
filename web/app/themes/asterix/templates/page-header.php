<?php use Roots\Sage\Titles; ?>
<?php
$hideTitle = get_field('subtext_hide_page_title');
if(!$hideTitle) :
?>
<div class="page-header">
  <div class="content">
    <h1><?= Titles\title(); ?></h1>
  </div>
</div>
<?php endif; ?>
