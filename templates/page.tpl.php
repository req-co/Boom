<header class="header" id="header" role="header">
  <div class="header-content">
    <?php print render($page['header']); ?>
  </div>
</header>

<main class="main" id="main" role="main">

  <div class="main-content-wrapper">

    <div class="main-content">

      <?php if ($title && !$is_front): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>

      <?php if ($messages): ?>
        <div id="messages">
          <div class="clearfix">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($tabs && !$is_front): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>

  </div>

</main>

<footer class="footer" id="footer" role="footer">
  <div class="footer-content">
    <?php print render($page['footer']); ?>
  </div>
</footer>