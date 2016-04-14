<!doctype html>
<html class="no-js" lang="en-us">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">

  <?php echo css('assets/css/styles.min.css') ?>

  <script src="https://use.typekit.net/vxx3ict.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body class="body page-id--<?php echo $page->id() ?> page-slug--<?php echo $page->slug() ?> page-template--<?php echo $page->template() ?>">

  <header role="banner">
    <?php snippet('menu') ?>
  </header>
