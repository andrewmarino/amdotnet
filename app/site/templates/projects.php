<?php snippet('header'); ?>
<main class="main">
  <article class="mw7-ns lh-copy f5 mt5-ns">
    <h1 class="f1-ns f2 mb0">Projects</h1>
    <?php
      $projects = page('projects')->children()->visible();
      if(isset($limit)) $projects = $projects->limit($limit);
    ?>
    <ul>
    <?php foreach($projects as $project): ?>
      <li>
        <a href="<?= $project->url() ?>"><?= $project->title()->html() ?></a>
      </li>
      <?php endforeach ?>
    </ul>
  </article>
</main>
<?php snippet('footer'); ?>
