<?php snippet('header'); ?>
<main class="main" role="main">
  <header class="mw7-ns lh-copy f5 mt5-ns">
    <h1 class="f1-ns f2 mb0"><?php echo $page->title() ?></h1>
    <?php if($page->text()) echo $page->text()->kirbytext() ?>
  </header>
  <section>
  <?php foreach($page->images()->sortBy('sort', 'asc') as $photo): ?>
    <?php
      $size = $photo->gridlayout()->value;
      $location = $photo->location()->value;
    ?>
    <figure class="ma0 mt5 mw6-ns">
      <div>
        <img class="lazy lazyload" data-expand="-10" data-src="<?php echo $photo->url() ?>" alt="<?php echo $photo->alt() ?>">
      </div>
      <?php if($location) : ?>
      <figcaption class="pv3 pl3 mt2 bl bw2">
        <span class="sr-only">Photo taken in: </span><span class="db f5"><?php echo $photo->location() ?></span>
        <time class="db mt2 f6 subtitle"><?php echo $photo->year() ?></time>
      </figcaption>
      <?php endif; ?>
    </figure>
  <?php endforeach; ?>
  </section>
</main>
<?php snippet('footer'); ?>
