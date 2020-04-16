<?php

$data = [
  'aspect_ratio' => round($image->dimensions()->ratio(), 2),
  'lowsrc'       => $image->thumb('lowsrc')->url(),
  'srcset'       => $image->srcset(),
  'src'          => $image->src(),
  'alt'          => $attrs->alt(),
];

?>

<?php if ($block->isNotEmpty()) : ?>
  <figure class="ratio-container mb3 pa0" <?= attr(['class' => $attrs->css()->value()], ' ') ?> data-aspect-ratio="<?= $data['aspect_ratio'] ?>">
    <img
      class="lazy"
      src="<?= $data['lowsrc'] ?>"
      data-srcset="<?= $data['srcset'] ?>"
      alt="<?= $data['alt'] ?>"
    />
    <noscript>
      <img src="<?= $data['src'] ?>" srcset="<?= $data['srcset'] ?>" alt="<?= $data['alt'] ?>" />
    </noscript>
    <?php if ($attrs->caption()->isNotEmpty()) : ?>
      <figcaption><?= $attrs->caption() ?></figcaption>
    <?php endif; ?>
  </figure>
<?php endif; ?>
