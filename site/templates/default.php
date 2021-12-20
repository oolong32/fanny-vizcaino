<?php

$translation = page()->translation(kirby()->language()->code())->exists();
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <?php snippet('head') ?>
</head>
<body>

  <?php snippet('header') ?>

  <?php snippet('separator') ?>
  <main>
    <?php if($translation == 1): ?>
      <p>hurra hurra, die Übersetzung ist schon da!</p>
    <?php else: ?>
      <p>Oje, oje, die Übersetzung fehlt.</p>
    <?php endif ?>
    <p></p>
    <h2><?= $page->title()->html() ?></h2>
    <?= $page->text()->kirbytext() ?>
  </main>
  <?php snippet('separator') ?>

  <?php snippet('footer') ?>

</body>
<?= js('assets/js/site.js') ?>
</html>
