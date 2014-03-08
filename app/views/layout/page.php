<?php include(VIEW . 'layout/header.php'); ?>
  <div id="menu">
<?php include(VIEW . 'layout/menu.php'); ?>
  </div>
  <div id="content">
<?php include($this->yield); ?>
  </div>
<?php include(VIEW . 'layout/footer.php'); ?>
