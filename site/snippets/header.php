<header>
<nav class="languages">
  <ul class="no-list">
    <?php foreach($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?= html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>

  <h1 class="logo"><a class="un-deco" href="<?= $site->url() ?>"><?= $site->title()->html() ?></a></h1>

  <?php
  // main menu items
  $items = $pages->listed();
  // only show the menu if items are available
  if($items->isNotEmpty()):
  ?>
    <nav class="services">
      <ul class="no-list">
        <?php foreach($items as $item): ?>
        <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>
  <?php endif ?>
</header>