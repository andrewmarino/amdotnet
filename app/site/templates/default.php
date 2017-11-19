<?php snippet('header'); ?>
<main class="main">
  <article class="mw7-ns lh-copy f5 mt5-ns">
    <h1 class="f1-ns f2 mb0"><?php echo $page->title() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
  </article>
</main>
<?php snippet('footer'); ?>
