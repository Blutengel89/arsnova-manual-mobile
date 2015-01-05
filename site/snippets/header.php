<!DOCTYPE html>
<html lang="de">
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <link rel="shortcut icon" href="<?= url('assets/images/favicon.png') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <?php echo css('assets/css/custom.css') ?>
  <?php echo css('assets/arsnova/style.css') ?>
</head>

<body>
    <div id="wrap">
      <header class="container clearfix">
      <span class="icon-radar" aria-hidden="true"></span><span class="icon-ars"></span><span class="icon-nova"></span>
      </header>