<footer>
  <p class="footer-title"><?= $site->title() ?></p>
  <p class="footer-address"> <?= $site->address()->html() ?><br>
  <?= $site->zip()->html() ?> <?= $site->city()->html() ?><!--<br>
  <?= $site->country()->html() ?>--></p>
  <p class="footer-contact"><?= Html::email($site->mail()) ?><br>
  Tel: <?= Html::tel($site->phone()) ?></p>
</footer> 