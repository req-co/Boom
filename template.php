<?php

function boom_css_alter(&$css) {
  //dsm($css);
  unset($css[drupal_get_path('module','system').'/system.menus.css']);
  unset($css[drupal_get_path('module','system').'/system.theme.css']);
}

function boom_preprocess_html(&$vars) {
  //dsm($vars);

  //removes less than helpful no-sidebars class that is hard coded into drupal
  $vars['classes_array'][3] = '';
  
  //adding theme-specific sidebar indicator class
  //replace with the name of your sidebar region and un-comment if needed
  // if (!empty($vars['page']['sidebar'])) {
  //   $vars['classes_array'][] = 'has-sidebar';
  // }
  // else {
  //   $vars['classes_array'][] = 'no-sidebar';
  // }
}

function boom_preprocess_page(&$vars) {
  //dsm($vars);

  if (isset($vars['node'])) { //this lets us use different page.tpls by content type
    $suggests = &$vars['theme_hook_suggestions'];
    $args = arg();
    unset($args[0]);
    $type = "page__type_{$vars['node']->type}";
    $suggests = array_merge(
      $suggests,
      array($type),
      theme_get_suggestions($args, $type)
    );
  }
}

function boom_preprocess_node(&$vars) {
  //dsm($vars);
}

function boom_preprocess_region(&$vars) {
  //dsm($vars);
}

function boom_preprocess_block(&$vars) {
  //dsm($vars);
}