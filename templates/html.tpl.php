<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php print $head_title; ?></title>

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

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