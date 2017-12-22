<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="icon" type="image/png" href="<?= $site->url() ?>/assets/images/favicon.png" />

  <?= css('assets/css/index.css') ?>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="grid">

      <div class="branding column">
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>
