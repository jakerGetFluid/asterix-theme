<?php
/**
 * Template Name: Flexible Page
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php 
    if( have_rows('subtext_content_sections') ):
      $counters = array();

      while ( have_rows('subtext_content_sections') ) : 

        the_row();
        $layout = get_row_layout();
        if(!isset($counters[$layout])){
          $counters[$layout] = 1;
        } else {
          $counters[$layout]++;
        }
        $layoutIndex = $counters[ $layout ];

        if( $layout == 'subtext_wysiwyg_blocks' ):

          get_template_part('partials/flexpage', 'wysiwyg_blocks');

        elseif( $layout == 'subtext_slider_carousel' ): 

          $slickSettings = get_sub_field('subtext_slider_carousel_settings');
          $autoplay = $slickSettings['subtext_slider_auto_play'];
          $autoplaySeconds = $slickSettings['subtext_slider_auto_play_speed'];
          $autoplaySpeed = $autoplaySeconds*1000;
          $slidesToShow = $slickSettings['subtext_slides_to_show'];
          $fade = $slickSettings['subtext_slider_fade_transition'];
          $fullCarousel = $slickSettings['subtext_slider_full_width'];

          if( have_rows('subtext_slides') ): ?>

          <div class="slider-carousel-<?php echo $layoutIndex; ?><?php if ($slidesToShow > 1) {echo ' content';}; ?><?php if ($fullCarousel) {echo ' grid-container full';}; ?>" data-equalizer>
            
          <?php while ( have_rows('subtext_slides') ) : the_row(); 
            $slideBgImg = get_sub_field('subtext_slide_background_image');
            $slideBgColor = get_sub_field('subtext_slide_background_color');
            $slideTextColor = get_sub_field('subtext_slide_text_color');
            $slideHeadline = get_sub_field('subtext_slide_headline');
            $slideSubheadline = get_sub_field('subtext_slide_sub-headline');
            $slideParagraph = get_sub_field('subtext_slide_paragraph_text');
            $slideCTAtext = get_sub_field('subtext_slide_cta_label');
            $slideCTAlink = get_sub_field('subtext_slide_cta_url');
            ?>
            <div class="slider-carousel<?php echo ($slideTextColor == 'dark') ? ' text-dark' : ' text-light'; ?><?php if ($slidesToShow > 1) {echo ' padding-all';}; ?>" style="<?php echo $slideBgImg ? 'background-image:url('.$slideBgImg.');' : ''; ?><?php echo $slideBgColor ? 'background-color:'.$slideBgColor.';' : ''; ?>" data-equalizer-watch>
              <div class="slider-carousel-inner<?php if ($slidesToShow == 1 && $fullCarousel) {echo ' content';}; ?>">
                <div class="slider-carousel-content">
                  <?php echo $slideHeadline ? '<h2>'.$slideHeadline.'</h2>' : ''; ?>
                  <?php echo $slideSubheadline ? '<h3>'.$slideSubheadline.'</h3>' : ''; ?>
                  <?php echo $slideParagraph ? '<p>'.$slideParagraph.'</p>' : ''; ?>
                  <?php if($slideCTAtext && $slideCTAlink){ ?>
                    <a href="<?php echo $slideCTAlink; ?>" class="button"><?php echo $slideCTAtext; ?></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          </div>

          <?php
          else :
              // no rows found
          endif; ?>

          <script type="text/javascript">
            (function($) {
              $('.slider-carousel-<?php echo $layoutIndex; ?>').slick({
                autoplay: <?php echo $autoplay ? 'true' : 'false'; ?>,
                <?php if($autoplay): ?>
                autoplaySpeed: <?php echo $autoplaySpeed; ?>,
                <?php endif; ?>
                slidesToShow: <?php echo $slidesToShow; ?>,
                <?php if($slidesToShow == 1) : ?>
                fade: <?php echo $fade ? 'true' : 'false'; ?>,
                <?php else : ?>
                fade: false,
                <?php endif; ?>
              });
            })(jQuery);
          </script>
        <?php
        // end subtext_slider_carousel

        endif;

      endwhile;

    else :

        // no layouts found

    endif;
  ?>
<?php endwhile; ?>
