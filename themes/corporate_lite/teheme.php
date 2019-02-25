<?php

/**
 * @file
 * Functions to support theming in the Corporate+ theme.
 */

use Drupal\Core\Theme\ThemeSettings;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Template\Attribute;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;
use Drupal\Component\Utility\Html;
use Drupal\Core\Url;

/**
 * Implements hook_preprocess_HOOK() for HTML document templates.
 *
 * Adds body classes if certain regions have content.
 */
function corporate_lite_preprocess_html(&$variables)
{

  $bootstrap_remote_type = theme_get_setting('bootstrap_remote_type');
  if ($bootstrap_remote_type == 'local') {
    $variables['#attached']['library'][] = 'corporate_lite/bootstrap';
  } else {
    $variables['#attached']['library'][] = 'corporate_lite/bootstrap-cdn';
  }

  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['attributes']['class'][] = 'layout-two-sidebars';
  } elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['attributes']['class'][] = 'layout-one-sidebar';
    $variables['attributes']['class'][] = 'layout-sidebar-first';
  } elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['attributes']['class'][] = 'layout-one-sidebar';
    $variables['attributes']['class'][] = 'layout-sidebar-second';
  } else {
    $variables['attributes']['class'][] = 'layout-no-sidebars';
  }

  $color_scheme_library = 'corporate_lite/color-' . theme_get_setting('color_scheme');
  $variables['#attached']['library'][] = $color_scheme_library;

  // Add class for layout mode on body tag.
  $variables['attributes']['class'][] = theme_get_setting('layout_mode');

  $headings_font_family = theme_get_setting('headings_font_family');
  $headings_wide_spacing = theme_get_setting('headings_wide_spacing');
  $paragraph_font_family = theme_get_setting('paragraph_font_family');
  $sitename_font_family = theme_get_setting('sitename_font_family');
  $slogan_font_family = theme_get_setting('slogan_font_family');

  $variables['attributes']['class'][] = $headings_font_family;
  $variables['attributes']['class'][] = $paragraph_font_family;
  $variables['attributes']['class'][] = $sitename_font_family;
  $variables['attributes']['class'][] = $slogan_font_family;
  if ($headings_wide_spacing) {
    $variables['attributes']['class'][] = "headings-wide-spacing-enabled";
  }

  //Get the IDs for each font family
  $headings_font_id = substr($headings_font_family, -2);
  $paragraph_font_id = substr($paragraph_font_family, -2);
  $sitename_font_id = substr($sitename_font_family, -2);
  $slogan_font_id = substr($slogan_font_family, -2);

  //Generate the library strings
  $headings_font_library = 'corporate_lite/fonts-id-' . $headings_font_id;
  $paragraph_font_library = 'corporate_lite/fonts-id-' . $paragraph_font_id;
  $sitename_font_library = 'corporate_lite/fonts-id-' . $sitename_font_id;
  $slogan_font_library = 'corporate_lite/fonts-id-' . $slogan_font_id;

  //Font families with the following IDs are OS specific and should not load an external font
  //yf: @font-your-face, yf=fyf
  //13: Georgia
  //21: Helvetica Neue
  //30: Times
  $no_library_array = array('yf', '13', '21', '30');

  //Directly Load the font family libraries if the IDs are not in the $no_library_array
  if (!in_array($headings_font_id, $no_library_array)) {
    $variables['#attached']['library'][] = $headings_font_library;
  }
  if (!in_array($paragraph_font_id, $no_library_array)) {
    $variables['#attached']['library'][] = $paragraph_font_library;
  }
  if (!in_array($sitename_font_id, $no_library_array)) {
    $variables['#attached']['library'][] = $sitename_font_library;
  }
  if (!in_array($slogan_font_id, $no_library_array)) {
    $variables['#attached']['library'][] = $slogan_font_library;
  }

  $variables['#attached']['library'][] = 'corporate_lite/fonts-sourcecodepro';

  // Blockquote symbol
  $variables['#attached']['library'][] = 'corporate_lite/fonts-pt-serif';

  // Load libraries for Animations
  $animations_state = theme_get_setting('animations_state');
  if ($animations_state) {
    $variables['#attached']['library'][] = 'corporate_lite/animate-global';
    $variables['#attached']['library'][] = 'corporate_lite/waypoints-animations-init';
  }

  //Load fixed-header library
  $fixed_header = theme_get_setting('fixed_header');
  if ($fixed_header) {
    $variables['attributes']['class'][] = 'fixed-header-enabled';
    $variables['#attached']['library'][] = 'corporate_lite/fixed-header';
  }

  //Load page-container-border
  $page_container_border = theme_get_setting('page_container_border');
  if ($page_container_border) {
    $variables['attributes']['class'][] = 'page-container-border-enabled';
  }

  // Add class for side of slideout to body.
  $variables['attributes']['class'][] = 'slideout-side-' . theme_get_setting('slideout_side');

  //Load transparent-header library
  $transparent_header_state = theme_get_setting('transparent_header_state');
  if ($transparent_header_state) {
    $variables['attributes']['class'][] = 'transparent-header-active';
  }

  //Inverted header state
  $inverted_header_state = theme_get_setting('inverted_header_state');
  if ($inverted_header_state) {
    $variables['attributes']['class'][] = "inverted-header-enabled";
    $variables['#attached']['library'][] = 'corporate_lite/inverted-header';
  }

}

function corporate_lite_preprocess_breadcrumb(&$variables)
{
  $variables['mt_setting']['breadcrumb_separator'] = theme_get_setting('breadcrumb_separator');

  if ($variables['breadcrumb']) {
    $request = \Drupal::request();
    $route_match = \Drupal::routeMatch();
    $page_title = \Drupal::service('title_resolver')->getTitle($request, $route_match->getRouteObject());
    if (!empty($page_title)) {
      $variables['breadcrumb'][] = array(
        'text' => $page_title
      );
      // Add cache context based on url.
      $variables['#cache']['contexts'][] = 'url';
    }
  }
}

/**
 * Implements hook_preprocess_HOOK() for page templates.
 */
function corporate_lite_preprocess_page_title(&$variables)
{
  // Since the title and the shortcut link are both block level elements,
  // positioning them next to each other is much simpler with a wrapper div.
  if (!empty($variables['title_suffix']['add_or_remove_shortcut']) && $variables['title']) {
    // Add a wrapper div using the title_prefix and title_suffix render
    // elements.
    $variables['title_prefix']['shortcut_wrapper'] = array(
      '#markup' => '<div class="shortcut-wrapper clearfix">',
      '#weight' => 100,
    );
    $variables['title_suffix']['shortcut_wrapper'] = array(
      '#markup' => '</div>',
      '#weight' => -99,
    );
    // Make sure the shortcut link is the first item in title_suffix.
    $variables['title_suffix']['add_or_remove_shortcut']['#weight'] = -100;
  }
}

function corporate_lite_preprocess_page(&$variables)
{

  $slideout = $variables['page']['slideout'];
  $sidebar_first = $variables['page']['sidebar_first'];
  $sidebar_second = $variables['page']['sidebar_second'];
  $content_bottom_first = $variables['page']['content_bottom_first'];
  $content_bottom_second = $variables['page']['content_bottom_second'];
  $footer_top_first = $variables['page']['footer_top_first'];
  $footer_top_second = $variables['page']['footer_top_second'];
  $footer_first = $variables['page']['footer_first'];
  $footer_second = $variables['page']['footer_second'];
  $footer_third = $variables['page']['footer_third'];
  $footer_fourth = $variables['page']['footer_fourth'];
  $footer_fifth = $variables['page']['footer_fifth'];
  $subfooter_second = $variables['page']['footer'];
  $subfooter_first = $variables['page']['sub_footer_first'];

  // Attach library to slideout region
  if ($slideout) {
    $variables['#attached']['library'][] = 'corporate_lite/slideout-init';
  }

  // Insert variables into the page template.

  // Header Top Highlighted
  $variables['header_top_highlighted_layout_container'] = theme_get_setting('header_top_highlighted_layout_container');

  $header_top_highlighted_first = $variables['page']['header_top_highlighted_first'];
  $header_top_highlighted_second = $variables['page']['header_top_highlighted_second'];

  if ($header_top_highlighted_first && $header_top_highlighted_second) {
    $variables['header_top_highlighted_first_grid_class'] = 'col-sm-9';
    $variables['header_top_highlighted_second_grid_class'] = 'col-sm-3';
  } elseif ($header_top_highlighted_first || $header_top_highlighted_second) {
    $variables['header_top_highlighted_first_grid_class'] = 'col-md-12';
    $variables['header_top_highlighted_second_grid_class'] = 'col-md-12';
  }

  // Header Top
  $variables['header_top_layout_container'] = theme_get_setting('header_top_layout_container');

  $header_top_first = $variables['page']['header_top_first'];
  $header_top_second = $variables['page']['header_top_second'];

  if ($header_top_first && $header_top_second) {
    $variables['header_top_first_grid_class'] = 'col-sm-6 col-md-10';
    $variables['header_top_second_grid_class'] = 'col-sm-6 col-md-2';
  } elseif ($header_top_first || $header_top_second) {
    $variables['header_top_first_grid_class'] = 'col-md-12';
    $variables['header_top_second_grid_class'] = 'col-md-12';
  }

  // Header
  $variables['header_layout_container'] = theme_get_setting('header_layout_container');
  $header_first = $variables['page']['header_first'];
  $header = $variables['page']['header'];
  $header_third = $variables['page']['header_third'];

  if (($header_first && !$header && $header_third) || (!$header_first && $header && $header_third)) {
    $variables['header_layout_columns_class'] = 'two-columns';
    if ($variables['header_layout_container'] == 'container-fluid') {
      $variables['header_first_grid_class'] = 'col-md-8 col-md-pull-4 col-lg-9 col-lg-pull-3';
      $variables['header_second_grid_class'] = 'col-md-8 col-md-pull-4 col-lg-9 col-lg-pull-3';
      $variables['header_third_grid_class'] = 'col-md-4 col-md-push-8 col-lg-3 col-lg-push-9';
    } else {
      $variables['header_first_grid_class'] = 'col-md-8 col-md-pull-4';
      $variables['header_second_grid_class'] = 'col-md-8 col-md-pull-4';
      $variables['header_third_grid_class'] = 'col-md-4 col-md-push-8';
    }
  } else if ($header_first && $header) {
    if ($header_third) {
      $variables['header_layout_columns_class'] = 'three-columns';
      $variables['header_first_grid_class'] = 'col-md-4 col-md-pull-1 col-sm-8 col-sm-pull-4';
      $variables['header_second_grid_class'] = 'col-md-7 col-md-pull-1 col-sm-12';
      $variables['header_third_grid_class'] = 'col-md-1 col-md-push-11 col-sm-4 col-sm-push-8';
    } else {
      $variables['header_layout_columns_class'] = 'two-columns';
      $variables['header_first_grid_class'] = 'col-md-4';
      $variables['header_second_grid_class'] = 'col-md-8';
    }
  } else {
    $variables['header_layout_columns_class'] = 'one-column';
    $variables['header_first_grid_class'] = 'col-xs-12';
    $variables['header_second_grid_class'] = 'col-xs-12';
    $variables['header_third_grid_class'] = 'col-xs-12';
  }

  if ($variables['header_layout_container'] == 'container-fluid') {
    $variables['header_layout_container_class'] = 'full-width';
  } else {
    $variables['header_layout_container_class'] = 'fixed-width';
  }

  // Banner
  $variables['banner_layout_container'] = theme_get_setting('banner_layout_container');

  // Content Top
  $variables['content_top_layout_container'] = theme_get_setting('content_top_layout_container');

  // Content Top Highlighted
  $variables['content_top_highlighted_layout_container'] = theme_get_setting('content_top_highlighted_layout_container');

  // Main Content Layout
  if ($sidebar_first && $sidebar_second) {
    $variables['main_grid_class'] = 'col-md-6 col-md-push-3';
    $variables['sidebar_first_grid_class'] = 'col-md-3 col-md-pull-6';
    $variables['sidebar_second_grid_class'] = 'col-md-3';
  } elseif ($sidebar_first && !$sidebar_second) {
    $variables['main_grid_class'] = 'col-md-8 col-md-push-4';
    $variables['sidebar_first_grid_class'] = 'col-md-4 col-md-pull-8 fix-sidebar-first';
    $variables['sidebar_second_grid_class'] = '';
  } elseif (!$sidebar_first && $sidebar_second) {
    $variables['main_grid_class'] = 'col-md-8';
    $variables['sidebar_first_grid_class'] = '';
    $variables['sidebar_second_grid_class'] = 'col-md-4 fix-sidebar-second';
  } else {
    $variables['main_grid_class'] = 'col-md-12';
    $variables['sidebar_first_grid_class'] = '';
    $variables['sidebar_second_grid_class'] = '';
  }

  // Content Bottom
  $variables['content_bottom_layout_container'] = theme_get_setting('content_bottom_layout_container');

  if ($content_bottom_second && $content_bottom_first) {
    $variables['content_bottom_first_grid_class'] = 'col-md-5';
    $variables['content_bottom_second_grid_class'] = 'col-md-5 col-md-offset-2';
  } elseif ($content_bottom_second || $content_bottom_first) {
    $variables['content_bottom_first_grid_class'] = 'col-md-12';
    $variables['content_bottom_second_grid_class'] = 'col-md-12';
  }

  // Featured Top
  $variables['featured_top_layout_container'] = theme_get_setting('featured_top_layout_container');

  // Featured
  $variables['featured_layout_container'] = theme_get_setting('featured_layout_container');

  // Featured Bottom
  $variables['featured_bottom_layout_container'] = theme_get_setting('featured_bottom_layout_container');

  // Sub Featured
  $variables['sub_featured_layout_container'] = theme_get_setting('sub_featured_layout_container');

  // Highlighted
  $variables['highlighted_layout_container'] = theme_get_setting('highlighted_layout_container');

  // Highlighted Top
  $variables['highlighted_top_layout_container'] = theme_get_setting('highlighted_top_layout_container');

  // Footer Top
  $variables['footer_top_layout_container'] = theme_get_setting('footer_top_layout_container');

  if ($footer_top_first && $footer_top_second) {
    $variables['footer_top_regions'] = 'two-regions';
    $variables['footer_top_first_grid_class'] = 'col-sm-6';
    $variables['footer_top_second_grid_class'] = 'col-sm-6';
  } elseif ($footer_top_second || $footer_top_first) {
    $variables['footer_top_regions'] = 'one-region';
    $variables['footer_top_first_grid_class'] = 'col-md-12';
    $variables['footer_top_second_grid_class'] = 'col-md-12';
  }

  // Footer Layout
  $variables['footer_layout_container'] = theme_get_setting('footer_layout_container');

  if ($footer_fifth) {
    if ($footer_first && $footer_second && $footer_third && $footer_fourth) {
      $variables['footer_first_grid_class'] = 'col-sm-4 col-lg-2';
      $variables['footer_second_grid_class'] = 'col-sm-4 col-lg-2';
      $variables['footer_third_grid_class'] = 'col-sm-4 col-lg-2';
      $variables['footer_fourth_grid_class'] = 'col-sm-6 col-lg-3';
      $variables['footer_fifth_grid_class'] = 'col-sm-6 col-lg-3';
    } elseif ((!$footer_first && $footer_second && $footer_third && $footer_fourth) || ($footer_first && !$footer_second && $footer_third && $footer_fourth)
      || ($footer_first && $footer_second && !$footer_third && $footer_fourth) || ($footer_first && $footer_second && $footer_third && !$footer_fourth)) {
      $variables['footer_first_grid_class'] = 'col-sm-6 col-md-3';
      $variables['footer_second_grid_class'] = 'col-sm-6 col-md-3';
      $variables['footer_third_grid_class'] = 'col-sm-6 col-md-3';
      $variables['footer_fourth_grid_class'] = 'col-sm-6 col-md-3';
      $variables['footer_fifth_grid_class'] = 'col-sm-6 col-md-3';
    } elseif ((!$footer_first && !$footer_second && $footer_third && $footer_fourth) || (!$footer_first && $footer_second && !$footer_third && $footer_fourth)
      || (!$footer_first && $footer_second && $footer_third && !$footer_fourth) || ($footer_first && !$footer_second && !$footer_third && $footer_fourth)
      || ($footer_first && !$footer_second && $footer_third && !$footer_fourth) || ($footer_first && $footer_second && !$footer_third && !$footer_fourth)) {
      $variables['footer_first_grid_class'] = 'col-sm-4';
      $variables['footer_second_grid_class'] = 'col-sm-4';
      $variables['footer_third_grid_class'] = 'col-sm-4';
      $variables['footer_fourth_grid_class'] = 'col-sm-4';
      $variables['footer_fifth_grid_class'] = 'col-sm-4';
    } elseif (($footer_first && !$footer_second && !$footer_third && !$footer_fourth) || (!$footer_first && $footer_second && !$footer_third && !$footer_fourth)
      || (!$footer_first && !$footer_second && $footer_third && !$footer_fourth) || (!$footer_first && !$footer_second && !$footer_third && $footer_fourth)) {
      $variables['footer_first_grid_class'] = 'col-sm-6';
      $variables['footer_second_grid_class'] = 'col-sm-6';
      $variables['footer_third_grid_class'] = 'col-sm-6';
      $variables['footer_fourth_grid_class'] = 'col-sm-6';
      $variables['footer_fifth_grid_class'] = 'col-sm-6';
    } else {
      $variables['footer_fifth_grid_class'] = 'col-sm-12';
    }
  } else {
    if ($footer_first && $footer_second && $footer_third && $footer_fourth) {
      $variables['footer_first_grid_class'] = 'col-sm-6 col-md-3';
      $variables['footer_second_grid_class'] = 'col-sm-6 col-md-3';
      $variables['footer_third_grid_class'] = 'col-sm-6 col-md-3';
      $variables['footer_fourth_grid_class'] = 'col-sm-6 col-md-3';
    } elseif ((!$footer_first && $footer_second && $footer_third && $footer_fourth) || ($footer_first && !$footer_second && $footer_third && $footer_fourth)
      || ($footer_first && $footer_second && !$footer_third && $footer_fourth) || ($footer_first && $footer_second && $footer_third && !$footer_fourth)) {
      $variables['footer_first_grid_class'] = 'col-sm-4';
      $variables['footer_second_grid_class'] = 'col-sm-4';
      $variables['footer_third_grid_class'] = 'col-sm-4';
      $variables['footer_fourth_grid_class'] = 'col-sm-4';
    } elseif ((!$footer_first && !$footer_second && $footer_third && $footer_fourth) || (!$footer_first && $footer_second && !$footer_third && $footer_fourth)
      || (!$footer_first && $footer_second && $footer_third && !$footer_fourth) || ($footer_first && !$footer_second && !$footer_third && $footer_fourth)
      || ($footer_first && !$footer_second && $footer_third && !$footer_fourth) || ($footer_first && $footer_second && !$footer_third && !$footer_fourth)) {
      $variables['footer_first_grid_class'] = 'col-sm-6';
      $variables['footer_second_grid_class'] = 'col-sm-6';
      $variables['footer_third_grid_class'] = 'col-sm-6';
      $variables['footer_fourth_grid_class'] = 'col-sm-6';
    } else {
      $variables['footer_first_grid_class'] = 'col-sm-12';
      $variables['footer_second_grid_class'] = 'col-sm-12';
      $variables['footer_third_grid_class'] = 'col-sm-12';
      $variables['footer_fourth_grid_class'] = 'col-sm-12';
    }
  }

  if (($footer_first && $footer_second) && (($footer_third && $footer_fourth && !$footer_fifth) || ($footer_third && !$footer_fourth && $footer_fifth) || (!$footer_third && $footer_fourth && $footer_fifth))) {
    $variables['footer_4_columns_clearfix_first'] = "visible-sm-block";
  } else {
    $variables['footer_4_columns_clearfix_first'] = "visible-xs-block";
  }
  if (($footer_fourth && $footer_fifth) && (($footer_first && $footer_second && !$footer_third) || ($footer_first && !$footer_second && $footer_third) || (!$footer_first && $footer_second && $footer_third))) {
    $variables['footer_4_columns_clearfix_second'] = "visible-sm-block";
  } else {
    $variables['footer_4_columns_clearfix_second'] = "visible-xs-block";
  }
  if ($footer_first && $footer_second && $footer_third && $footer_fourth && $footer_fifth) {
    $variables['footer_5_columns_clearfix'] = "visible-sm-block visible-md-block";
  } else {
    $variables['footer_5_columns_clearfix'] = "visible-xs-block";
  }

  //Footer Bottom
  $variables['footer_bottom_layout_container'] = theme_get_setting('footer_bottom_layout_container');

  // Subfooter
  $variables['subfooter_layout_container'] = theme_get_setting('subfooter_layout_container');

  if ($subfooter_second && $subfooter_first) {
    $variables['subfooter_first_grid_class'] = 'col-md-6';
    $variables['subfooter_second_grid_class'] = 'col-md-6';
  } elseif ($subfooter_second || $subfooter_first) {
    $variables['subfooter_second_grid_class'] = 'col-md-12 text-center';
    $variables['subfooter_first_grid_class'] = 'col-md-12 text-center';
  }

  // Animations
  $animations_state = theme_get_setting('animations_state');
  $variables['header_top_highlighted_animation_effect'] = theme_get_setting('header_top_highlighted_animation_effect');
  if ($animations_state && $variables['header_top_highlighted_animation_effect'] != "no-animation") {
    $variables['header_top_highlighted_animations'] = "enabled";
  } else {
    $variables['header_top_highlighted_animations'] = "disabled";
  }

  $variables['header_top_animation_effect'] = theme_get_setting('header_top_animation_effect');
  if ($animations_state && $variables['header_top_animation_effect'] != "no-animation") {
    $variables['header_top_animations'] = "enabled";
  } else {
    $variables['header_top_animations'] = "disabled";
  }

  $variables['content_top_animation_effect'] = theme_get_setting('content_top_animation_effect');
  if ($animations_state && $variables['content_top_animation_effect'] != "no-animation") {
    $variables['content_top_animations'] = "enabled";
  } else {
    $variables['content_top_animations'] = "disabled";
  }

  $variables['content_top_highlighted_animation_effect'] = theme_get_setting('content_top_highlighted_animation_effect');
  if ($animations_state && $variables['content_top_highlighted_animation_effect'] != "no-animation") {
    $variables['content_top_highlighted_animations'] = "enabled";
  } else {
    $variables['content_top_highlighted_animations'] = "disabled";
  }

  $variables['main_content_animation_effect'] = theme_get_setting('main_content_animation_effect');
  if ($animations_state && $variables['main_content_animation_effect'] != "no-animation") {
    $variables['main_content_animations'] = "enabled";
  } else {
    $variables['main_content_animations'] = "disabled";
  }

  $variables['sidebar_first_animation_effect'] = theme_get_setting('sidebar_first_animation_effect');
  if ($animations_state && $variables['sidebar_first_animation_effect'] != "no-animation") {
    $variables['sidebar_first_animations'] = "enabled";
  } else {
    $variables['sidebar_first_animations'] = "disabled";
  }

  $variables['sidebar_second_animation_effect'] = theme_get_setting('sidebar_second_animation_effect');
  if ($animations_state && $variables['sidebar_second_animation_effect'] != "no-animation") {
    $variables['sidebar_second_animations'] = "enabled";
  } else {
    $variables['sidebar_second_animations'] = "disabled";
  }

  $variables['content_bottom_animation_effect'] = theme_get_setting('content_bottom_animation_effect');
  if ($animations_state && $variables['content_bottom_animation_effect'] != "no-animation") {
    $variables['content_bottom_animations'] = "enabled";
  } else {
    $variables['content_bottom_animations'] = "disabled";
  }

  $variables['featured_top_animation_effect'] = theme_get_setting('featured_top_animation_effect');
  if ($animations_state && $variables['featured_top_animation_effect'] != "no-animation") {
    $variables['featured_top_animations'] = "enabled";
  } else {
    $variables['featured_top_animations'] = "disabled";
  }

  $variables['featured_animation_effect'] = theme_get_setting('featured_animation_effect');
  if ($animations_state && $variables['featured_animation_effect'] != "no-animation") {
    $variables['featured_animations'] = "enabled";
  } else {
    $variables['featured_animations'] = "disabled";
  }

  $variables['featured_bottom_animation_effect'] = theme_get_setting('featured_bottom_animation_effect');
  if ($animations_state && $variables['featured_bottom_animation_effect'] != "no-animation") {
    $variables['featured_bottom_animations'] = "enabled";
  } else {
    $variables['featured_bottom_animations'] = "disabled";
  }

  $variables['sub_featured_animation_effect'] = theme_get_setting('sub_featured_animation_effect');
  if ($animations_state && $variables['sub_featured_animation_effect'] != "no-animation") {
    $variables['sub_featured_animations'] = "enabled";
  } else {
    $variables['sub_featured_animations'] = "disabled";
  }

  $variables['highlighted_animation_effect'] = theme_get_setting('highlighted_animation_effect');
  if ($animations_state && $variables['highlighted_animation_effect'] != "no-animation") {
    $variables['highlighted_animations'] = "enabled";
  } else {
    $variables['highlighted_animations'] = "disabled";
  }

  $variables['highlighted_top_animation_effect'] = theme_get_setting('highlighted_top_animation_effect');
  if ($animations_state && $variables['highlighted_top_animation_effect'] != "no-animation") {
    $variables['highlighted_top_animations'] = "enabled";
  } else {
    $variables['highlighted_top_animations'] = "disabled";
  }

  $variables['footer_top_animation_effect'] = theme_get_setting('footer_top_animation_effect');
  if ($animations_state && $variables['footer_top_animation_effect'] != "no-animation") {
    $variables['footer_top_animations'] = "enabled";
  } else {
    $variables['footer_top_animations'] = "disabled";
  }

  $variables['footer_animation_effect'] = theme_get_setting('footer_animation_effect');
  if ($animations_state && $variables['footer_animation_effect'] != "no-animation") {
    $variables['footer_animations'] = "enabled";
  } else {
    $variables['footer_animations'] = "disabled";
  }

  // Region ids
  $variables['banner_id'] = theme_get_setting('banner_id');
  $variables['content_top_id'] = theme_get_setting('content_top_id');
  $variables['content_top_highlighted_id'] = theme_get_setting('content_top_highlighted_id');
  $variables['main_content_id'] = theme_get_setting('main_content_id');
  $variables['content_bottom_id'] = theme_get_setting('content_bottom_id');
  $variables['featured_top_id'] = theme_get_setting('featured_top_id');
  $variables['featured_id'] = theme_get_setting('featured_id');
  $variables['featured_bottom_id'] = theme_get_setting('featured_bottom_id');
  $variables['sub_featured_id'] = theme_get_setting('sub_featured_id');
  $variables['highlighted_top_id'] = theme_get_setting('highlighted_top_id');
  $variables['highlighted_id'] = theme_get_setting('highlighted_id');
  $variables['footer_top_id'] = theme_get_setting('footer_top_id');
  $variables['footer_id'] = theme_get_setting('footer_id');
  $variables['footer_bottom_id'] = theme_get_setting('footer_bottom_id');
  $variables['subfooter_id'] = theme_get_setting('subfooter_id');

  // Region Background Color
  $variables['slideout_background_color'] = theme_get_setting('slideout_background_color');
  $variables['header_top_highlighted_background_color'] = theme_get_setting('header_top_highlighted_background_color');
  $variables['header_top_background_color'] = theme_get_setting('header_top_background_color');
  $variables['header_background_color'] = theme_get_setting('header_background_color');
  $variables['banner_background_color'] = theme_get_setting('banner_background_color');
  $variables['content_top_background_color'] = theme_get_setting('content_top_background_color');
  $variables['content_top_highlighted_background_color'] = theme_get_setting('content_top_highlighted_background_color');
  $variables['content_bottom_background_color'] = theme_get_setting('content_bottom_background_color');
  $variables['featured_top_background_color'] = theme_get_setting('featured_top_background_color');
  $variables['featured_background_color'] = theme_get_setting('featured_background_color');
  $variables['featured_bottom_background_color'] = theme_get_setting('featured_bottom_background_color');
  $variables['sub_featured_background_color'] = theme_get_setting('sub_featured_background_color');
  $variables['highlighted_background_color'] = theme_get_setting('highlighted_background_color');
  $variables['highlighted_top_background_color'] = theme_get_setting('highlighted_top_background_color');
  $variables['footer_top_background_color'] = theme_get_setting('footer_top_background_color');
  $variables['footer_background_color'] = theme_get_setting('footer_background_color');
  $variables['footer_bottom_background_color'] = theme_get_setting('footer_bottom_background_color');
  $variables['subfooter_background_color'] = theme_get_setting('subfooter_background_color');

  //Region Separator
  $variables['content_top_highlighted_separator'] = theme_get_setting('content_top_highlighted_separator');
  $variables['main_content_separator'] = theme_get_setting('main_content_separator');
  $variables['content_bottom_separator'] = theme_get_setting('content_bottom_separator');
  $variables['featured_top_separator'] = theme_get_setting('featured_top_separator');
  $variables['featured_separator'] = theme_get_setting('featured_separator');
  $variables['featured_bottom_separator'] = theme_get_setting('featured_bottom_separator');
  $variables['sub_featured_separator'] = theme_get_setting('sub_featured_separator');
  $variables['highlighted_top_separator'] = theme_get_setting('highlighted_top_separator');
  $variables['highlighted_separator'] = theme_get_setting('highlighted_separator');
  $variables['footer_top_separator'] = theme_get_setting('footer_top_separator');
  $variables['footer_separator'] = theme_get_setting('footer_separator');
  $variables['footer_bottom_separator'] = theme_get_setting('footer_bottom_separator');
  $variables['subfooter_separator'] = theme_get_setting('subfooter_separator');

  // Region Blocks Paddings
  $variables['slideout_blocks_paddings'] = theme_get_setting('slideout_blocks_paddings');
  $variables['header_top_highlighted_blocks_paddings'] = theme_get_setting('header_top_highlighted_blocks_paddings');
  $variables['header_top_blocks_paddings'] = theme_get_setting('header_top_blocks_paddings');
  $variables['header_blocks_paddings'] = theme_get_setting('header_blocks_paddings');
  $variables['banner_blocks_paddings'] = theme_get_setting('banner_blocks_paddings');
  $variables['content_top_blocks_paddings'] = theme_get_setting('content_top_blocks_paddings');
  $variables['content_top_highlighted_blocks_paddings'] = theme_get_setting('content_top_highlighted_blocks_paddings');
  $variables['main_content_blocks_paddings'] = theme_get_setting('main_content_blocks_paddings');
  $variables['sidebar_first_blocks_paddings'] = theme_get_setting('sidebar_first_blocks_paddings');
  $variables['sidebar_second_blocks_paddings'] = theme_get_setting('sidebar_second_blocks_paddings');
  $variables['content_bottom_blocks_paddings'] = theme_get_setting('content_bottom_blocks_paddings');
  $variables['featured_top_blocks_paddings'] = theme_get_setting('featured_top_blocks_paddings');
  $variables['featured_blocks_paddings'] = theme_get_setting('featured_blocks_paddings');
  $variables['featured_bottom_blocks_paddings'] = theme_get_setting('featured_bottom_blocks_paddings');
  $variables['sub_featured_blocks_paddings'] = theme_get_setting('sub_featured_blocks_paddings');
  $variables['highlighted_top_blocks_paddings'] = theme_get_setting('highlighted_top_blocks_paddings');
  $variables['highlighted_blocks_paddings'] = theme_get_setting('highlighted_blocks_paddings');
  $variables['footer_top_blocks_paddings'] = theme_get_setting('footer_top_blocks_paddings');
  $variables['footer_blocks_paddings'] = theme_get_setting('footer_blocks_paddings');
  $variables['footer_bottom_blocks_paddings'] = theme_get_setting('footer_bottom_blocks_paddings');
  $variables['subfooter_blocks_paddings'] = theme_get_setting('subfooter_blocks_paddings');

  // Region Region Paddings
  $variables['slideout_region_paddings'] = theme_get_setting('slideout_region_paddings');
  $variables['header_top_highlighted_region_paddings'] = theme_get_setting('header_top_highlighted_region_paddings');
  $variables['header_top_region_paddings'] = theme_get_setting('header_top_region_paddings');
  $variables['header_region_paddings'] = theme_get_setting('header_region_paddings');
  $variables['banner_region_paddings'] = theme_get_setting('banner_region_paddings');
  $variables['content_top_region_paddings'] = theme_get_setting('content_top_region_paddings');
  $variables['content_top_highlighted_region_paddings'] = theme_get_setting('content_top_highlighted_region_paddings');
  $variables['main_content_region_paddings'] = theme_get_setting('main_content_region_paddings');
  $variables['sidebar_first_region_paddings'] = theme_get_setting('sidebar_first_region_paddings');
  $variables['sidebar_second_region_paddings'] = theme_get_setting('sidebar_second_region_paddings');
  $variables['content_bottom_region_paddings'] = theme_get_setting('content_bottom_region_paddings');
  $variables['featured_top_region_paddings'] = theme_get_setting('featured_top_region_paddings');
  $variables['featured_region_paddings'] = theme_get_setting('featured_region_paddings');
  $variables['featured_bottom_region_paddings'] = theme_get_setting('featured_bottom_region_paddings');
  $variables['sub_featured_region_paddings'] = theme_get_setting('sub_featured_region_paddings');
  $variables['highlighted_top_region_paddings'] = theme_get_setting('highlighted_top_region_paddings');
  $variables['highlighted_region_paddings'] = theme_get_setting('highlighted_region_paddings');
  $variables['footer_top_region_paddings'] = theme_get_setting('footer_top_region_paddings');
  $variables['footer_region_paddings'] = theme_get_setting('footer_region_paddings');
  $variables['footer_bottom_region_paddings'] = theme_get_setting('footer_bottom_region_paddings');
  $variables['subfooter_region_paddings'] = theme_get_setting('subfooter_region_paddings');

  //Load to-top library
  $variables['scroll_to_top_display'] = theme_get_setting('scroll_to_top_display');
  if ($variables['scroll_to_top_display']) {
    $variables['#attached']['library'][] = 'corporate_lite/to-top';
    $variables['scroll_to_top_icon'] = theme_get_setting('scroll_to_top_icon');
  }

  //fixed header
  $variables['fixed_header'] = theme_get_setting('fixed_header');
}

function corporate_lite_page_attachments_alter(&$page)
{

  //In page slider
  $in_page_slider_effect = theme_get_setting('in_page_slider_effect');

  $page['#attached']['drupalSettings']['corporate_lite']['flexsliderInPageInit']['inPageSliderEffect'] = $in_page_slider_effect;

  // In page navigation offset
  $in_page_navigation_offset = (int)theme_get_setting('in_page_navigation_offset');
  $page['#attached']['drupalSettings']['corporate_lite']['inPageNavigation']['inPageNavigationOffset'] = $in_page_navigation_offset;

  // Slideout
  $slideout_side = theme_get_setting('slideout_side');
  $slideout_touch_swipe = theme_get_setting('slideout_touch_swipe');
  $page['#attached']['drupalSettings']['corporate_lite']['slideoutInit']['slideoutSide'] = $slideout_side;
  if ($slideout_touch_swipe) {
    $page['#attached']['drupalSettings']['corporate_lite']['slideoutInit']['slideoutTouchSwipe'] = true;
  } else {
    $page['#attached']['drupalSettings']['corporate_lite']['slideoutInit']['slideoutTouchSwipe'] = false;
  }
}

/**
 * Implements hook_preprocess_HOOK() for node.html.twig.
 */
function corporate_lite_preprocess_node(&$variables)
{
  // Remove the "Add new comment" link on teasers or when the comment form is
  // displayed on the page.
  if ($variables['teaser'] || !empty($variables['content']['comments']['comment_form'])) {
    unset($variables['content']['links']['comment']['#links']['comment-add']);
  }

  if (isset($variables['node']->comment)) {
    $comment_count = $variables['node']->get('comment')->__get('comment_count');
    if ($comment_count) {
      $variables['comment_count'] = $comment_count;
    } else {
      $variables['comment_count'] = "0";
    }
  }

}

function corporate_lite_preprocess_node__article(&$variables)
{
  $variables['mt_setting']['reading_time'] = theme_get_setting('reading_time');

  // Count the words of article in order to calculate the reading time
  $node_content = $variables['content'];
  $node_content = render($node_content);
  $words = str_word_count(strip_tags($node_content));
  if (isset($variables['content']['comment'])) {
    $node_comments = $variables['content']['comment'];
    $node_comments = render($node_comments);
    $words = $words - str_word_count(strip_tags($node_comments));
  }
  $variables['minutes'] = floor($words / 275);
}

/**
 * Implements hook_preprocess_HOOK() for block.html.twig.
 */
function corporate_lite_preprocess_block(&$variables)
{
  // Add a clearfix class to blocks.
  $variables['attributes']['class'][] = 'clearfix';
}

/**
 * Implements hook_preprocess_HOOK() for pager.html.twig.
 */
function corporate_lite_preprocess_pager(&$variables)
{
  $variables['#attached']['library'][] = 'corporate_lite/pager';
}

/**
 * Implements hook_preprocess_HOOK() for views-mini-pager.html.twig.
 */
function corporate_lite_preprocess_views_mini_pager(&$variables)
{
  $variables['#attached']['library'][] = 'corporate_lite/mini-pager';
}

/**
 * Implements hook_preprocess_HOOK() for menu.html.twig.
 */
function corporate_lite_preprocess_menu(&$variables)
{
  $variables['attributes']['class'][] = 'clearfix';
}

/**
 * Implements hook_theme_suggestions_HOOK_alter() for form templates.
 */
function corporate_lite_theme_suggestions_form_alter(array &$suggestions, array $variables)
{
  if ($variables['element']['#form_id'] == 'search_block_form') {
    $suggestions[] = 'form__search_block_form';
  }
}

/**
 * Implements hook_form_alter() to add classes to the search form.
 */
function corporate_lite_form_alter(&$form, FormStateInterface $form_state, $form_id)
{
  if (in_array($form_id, ['search_block_form', 'search_form'])) {
    $key = ($form_id == 'search_block_form') ? 'actions' : 'basic';
    if (!isset($form[$key]['submit']['#attributes'])) {
      $form[$key]['submit']['#attributes'] = new Attribute();
    }
    $form[$key]['submit']['#attributes']->addClass('search-form__submit');
    $form['keys']['#attributes']['placeholder'] = t('Search...');
  }
}

function corporate_lite_preprocess_field(&$variables)
{
  $element = $variables['element'];
  $variables['view_mode'] = $element['#view_mode']; //Expose node view_mode to field templates
}

function corporate_lite_preprocess_field__entity_reference(&$variables)
{
  $variables['entity_reference_target_type'] = $variables['element']['#items']->getItemDefinition()->getSetting('target_type');
}

function corporate_lite_theme_suggestions_image_formatter_alter(array &$suggestions, array $variables)
{
  $entity = $variables['item']->getEntity();
  $field_name = $variables['item']->getParent()->getName();
  if (isset($entity) && isset($field_name)) {
    $suggestions[] = 'image_formatter__' . $entity->getEntityTypeId() . '__' . $field_name;
    $suggestions[] = 'image_formatter__' . $entity->getEntityTypeId() . '__' . $entity->bundle() . '__' . $field_name;
  }
}
