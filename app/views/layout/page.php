<?php include(VIEW . 'layout/header.php'); ?>
<?php if($this->parts["menu"]) { ?>
  <div id="menu">
<?php include($this->parts["menu"]); ?>
  </div>
<?php } ?>
  <div id="content">
<?php include($this->yield); ?>
  </div>
<?php include(VIEW . 'layout/footer.php'); ?>
