<?php

//require_once dirname(__FILE__) . '/template.php';

function boom_form_system_theme_settings_alter(&$form, $form_state) {
  //we hide this here because if we hide everything in the .info file it defaults back to displaying them all *sigh*
  // $form['logo']['default_logo']['#default_value'] = 0;
  // hide($form['logo']);

  //we hijack the theme settings for our smartass comment
  // $form['theme_settings']['#title'] = "Guess what?!";
  // $form['theme_settings']['#description'] = "You have no choices here! Relax and enjoy it. You can even hit the \"Save configuration\" button if it makes you happy, but it won't do anything.";
  // hide($form['theme_settings']['toggle_logo']);
  // dsm($form);
}
