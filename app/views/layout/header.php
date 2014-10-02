<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=@$page_title ? $page_title : "Welcome"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
<?php foreach (@$this->css as $css) { ?>
    <link rel="stylesheet" href="<?=$css?>" type="text/css" media="screen">
<?php } ?>
<?php foreach (@$this->js as $js) { ?>
    <script src="<?=$js?>"></script>
<?php } ?>
  </head>
  <body>
