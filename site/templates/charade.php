<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      
      <h2><?= $page->title()->html() ?></h2>
      <div class="intro text">
        <?php $i = 1 ?>
        <?php foreach ($page->charade()->toStructure() as $c) : ?>
          <?php makeNumber($i) ?> <?= $c->mon() ?><br>
          <?php $i++ ?>
        <?php endforeach ?>
      </div>
      <hr />
      <div class="intro text">
        Mon tout <?= $page->tout() ?>
      </div>

      <p id="show" class="projects-section-more">
      <span class="btn">Voir la réponse</span>
      </p>

      <div id="answer" class="projects-section-more">
        <h3><?= $page->answer() ?></h3>
        (<?php foreach ($page->charade()->toStructure() as $c) : ?>
          <?= $c->answer() ?>
        <?php endforeach ?>)
        </div>      
    </header>
      
    <div class="text wrap bottom-nav">
      <a href="<?= page('charades')->children()->shuffle()->first()->url() ?>">Au hasard !</a>
    </div>

    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>