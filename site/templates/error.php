<!DOCTYPE html>
<html lang="de">
<head>
  <?php snippet('head') ?>
</head>
<body class="error-page">

  <?php snippet('header') ?>

  <?php snippet('separator') ?>
  <main>
    <h2><?= $page->title()->html() ?></h2>
    <?= $page->text()->kirbytext() ?>
  </main>
  <?php snippet('separator') ?>

  <?php snippet('footer') ?>

</body>
<?= js('assets/js/site.js') ?>
</html>
