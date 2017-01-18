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

  if(arg(0) != 'node' && !is_numeric(arg(1))) {
    $vars['classes_array'][] = 'non-node';
  }

}

function boom_preprocess_page(&$vars) {
  // Adds page template suggestion based on node type.
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  }

}

function boom_preprocess_image(&$variables) {
  // Do not allow drupal to set width and height on images
  unset($variables['width'], $variables['height'], $variables['attributes']['width'], $variables['attributes']['height']);
}

function boom_menu_link(array $variables) {
  $element = $variables ['element'];
  $sub_menu = '';
  $title = '<span>' . $element['#title'] . '</span>';
  $plainTitle = drupal_html_class($element['#title']);
  $element['#attributes']['class'][] = 'menu-' . strtolower($plainTitle);

  $options = $element['#localized_options'];

  if ($element ['#below']) {
    $sub_menu = drupal_render($element ['#below']);
  }

  $options['html'] = 'TRUE';

  $output = l($title, $element ['#href'], $options);
  return '<li' . drupal_attributes($element ['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
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

function boom_preprocess_block(&$vars) {
  // Make sure that this is a custom block, and not a block that is provided by
  // a module.
  if ($vars['block']->module == 'block') {
    // Load the block information.
    $info = block_custom_block_get($vars['block']->delta);

    // Trim white space off of block info
    $block_desc = trim($info['info']);

    // Make lowercase
    $block_desc = strtolower($block_desc);

    // Replace spaces with hyphens
    $block_desc_class = drupal_html_class($block_desc);

    // Add block description to the list of classes.
    $vars['classes_array'][] = $block_desc_class;
  }
}

function boom_pager_link($variables) {
  $text = $variables['text'];
  $page_new = $variables['page_new'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  $attributes = $variables['attributes'];

  $page = isset($_GET['page']) ? $_GET['page'] : '';
  if ($new_page = implode(',', pager_load_array($page_new[$element], $element, explode(',', $page)))) {
    $parameters['page'] = $new_page;
  }

  $query = array();
  if (count($parameters)) {
    $query = drupal_get_query_parameters($parameters, array());
  }
  if ($query_pager = pager_get_query_parameters()) {
    $query = array_merge($query, $query_pager);
  }

  // Set each pager link title
  if (!isset($attributes['title'])) {
    static $titles = NULL;
    if (!isset($titles)) {
      $titles = array(
        t('« first') => t('Go to first page'),
        t('‹ previous') => t('Go to previous page'),
        t('next ›') => t('Go to next page'),
        t('last »') => t('Go to last page'),
      );
    }
    if (isset($titles[$text])) {
      $attributes['title'] = $titles[$text];
    }
    elseif (is_numeric($text)) {
      $attributes['title'] = t('Go to page @number', array('@number' => $text));
    }
    // Add rel attribute.
    if ($text == t('‹ previous')) {
      $attributes['rel'] = 'prev';
    }
    elseif ($text == t('next ›')) {
      $attributes['rel'] = 'next';
    }
  }

  // @todo l() cannot be used here, since it adds an 'active' class based on the
  //   path only (which is always the current path for pager links). Apparently,
  //   none of the pager links is active at any time - but it should still be
  //   possible to use l() here.
  // @see http://drupal.org/node/1410574
  $attributes['href'] = url($_GET['q'], array('query' => $query));
  return '<a' . drupal_attributes($attributes) . '>' . check_plain($text) . '</a>';
}