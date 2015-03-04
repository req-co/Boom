<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
  <?php print $page_top; ?>
  <a href="#main" class="skip-link" id="skip-to-main"><?php print t('Skip to main content'); ?></a>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
