<?php snippet('header'); ?>
<main class="main">
  <article>
    <?php foreach($page->images()->sortBy('sort', 'asc') as $photo): ?>
    <picture class="db ma0 mt5">
      <source data-srcset="<?= thumb($photo, ['width' => 475, 'quality' => 80])->url(); ?>, <?= thumb($photo, ['width' => 800, 'quality' => 80])->url(); ?> 2x" media="(min-width: 768px)">
      <img
        class="lazy lazyload"
        data-expand="-10"
        data-src="<?= thumb($photo, ['width' => 475, 'quality' => 80])->url(); ?>"
        alt="<?= $photo->alt(); ?>"
      />
    </picture>
    <?php endforeach; ?>
  </article>
</main>
<?php snippet('footer'); ?>
