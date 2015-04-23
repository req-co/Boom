<?php

function boom_css_alter(&$css) {
  //dsm($css);
  unset($css[drupal_get_path('module','system').'/system.menus.css']);
  unset($css[drupal_get_path('module','system').'/system.theme.css']);
}

function boom_preprocess_html(&$vars) {
  //dsm($vars);

  //to add a Google Fonts stylesheet - replace the URL
  //drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));

  // Remove drupal hard coded no-sidebars class
  $vars['classes_array'][3] = '';

  // Add theme-specific sidebar class
  // if (!empty($vars['page']['sidebar'])) {
  //   $vars['classes_array'][] = 'has-sidebar';
  // }
  // else {
  //   $vars['classes_array'][] = 'no-sidebar';
  // }
}

function boom_preprocess_page(&$vars) {
  // Adds page template suggestion based on node type.
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  }

}

function counterculture_preprocess_image(&$variables) {
  // Do not allow drupal to set width and height on images
  unset($variables['width'], $variables['height'], $variables['attributes']['width'], $variables['attributes']['height']);
}

// function boom_preprocess_node(&$vars) {
//   //dsm($vars);
// }

// function boom_preprocess_region(&$vars) {
//   //dsm($vars);
// }

// function boom_preprocess_block(&$vars) {
//   //dsm($vars);
// }
