<header class="header" id="header" role="header">
  <div class="header-content">
    <?php print render($page['header']); ?>
  </div>
</header>

<main class="main" id="main" role="main">
  <div class="main-content">
    <?php print $messages; ?>
    <?php print render($page['content']); ?>
  </div>
</main>

<footer class="footer" id="footer" role="footer">
  <div class="footer-content">
    <?php print render($page['footer']); ?>
  </div>
</footer>