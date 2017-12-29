<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site->title()->html(); ?> | <?php echo $page->title()->html(); ?></title>
    <meta name="description" content="<?php echo $site->description()->html(); ?>">
    <link rel="stylesheet" href="<?= mix('/styles/main.css'); ?>">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
  </head>
  <body class="<?php echo $page->template() ?> body sans-serif ph5-l ph4-m pa3">
    <header class="mw8-ns pt3-ns">
      <?php snippet('menu'); ?>
    </header>
