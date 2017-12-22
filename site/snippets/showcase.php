<?php

$projects = page('charades')->children()->visible()->flip();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="team-list grid gutter-1">

  <?php foreach($projects as $project): ?>

    <li class="team-item column">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>