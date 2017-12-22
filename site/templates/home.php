<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
        <a href="<?= page('charades')->children()->shuffle()->first()->url() ?>">Au hasard !</a>
      </div>
    </header>
  
    <section class="projects-section">
      
      <div class="wrap wide">
        <h2>Dernières charades</h2>
        <?php snippet('showcase', ['limit' => 4]) ?>
        <p class="projects-section-more"><a href="<?= page('charades')->url() ?>" class="btn">Voir toutes les charades &hellip;</a></p>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>