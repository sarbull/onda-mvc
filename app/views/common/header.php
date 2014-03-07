<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo @$page_title ? $page_title : "Welcome"; ?></title>
<?php foreach (@$this->css as $css) { ?>
    <link rel="stylesheet" href="<?php echo $css;?>" type="text/css" media="screen">
<?php } ?>
<?php foreach (@$this->js as $js) { ?>
    <script src="<?php echo $js;?>"></script>
<?php } ?>
  </head>
  <body>
  <ul>
    <li><a href="<?php echo BASE_URL; ?>users">Users</a></li>
    <li><a href="<?php echo BASE_URL; ?>users/create">Create</a></li>
  </ul>
