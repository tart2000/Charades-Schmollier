<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header>
      
    <div class="wrap wide">    
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>