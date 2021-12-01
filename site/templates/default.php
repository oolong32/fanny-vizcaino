<!DOCTYPE html>
<html lang="de">
<head>
  <?php snippet('head') ?>
</head>
<body>

  <?php snippet('header') ?>

  <main>
    <h2><?= $page->title()->html() ?></h2>
    <?= $page->text()->kirbytext() ?>
  </main>

  <?php snippet('footer') ?>

</body>
<?= js('assets/js/site.js') ?>
</html>
