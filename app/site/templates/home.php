<?php snippet('header'); ?>
<main class="main" role="main">
  <article>
    <h1 class="f1-ns f2 mb0"><?php echo $page->title() ?></h1>

    <h2>Projects</h2>
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
