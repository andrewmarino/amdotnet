<?php snippet('header'); ?>
<main class="main" role="main">
  <article>
    <h1 class="f1-ns f2 mb0"><?php echo $page->title() ?></h1>
    <section class="mw7-ns lh-copy">
      <?php echo $page->text()->kirbytext() ?>
    </section>
  </article>
</main>
<?php snippet('footer'); ?>
