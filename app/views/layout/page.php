<?php include(VIEW . 'layout/header.php'); ?>
<?php if($this->parts["menu"]) { ?>
  <div id="menu">
<?php include($this->parts["menu"]); ?>
  </div>
<?php } ?>
<?php if(@$errors) { ?>
  <div id="errors">
<?php foreach ($errors as $error) {
  echo $error . "<br>\n";
} ?>
  </div>
<?php } ?>
  <div id="content">
<?php include($this->yield); ?>
  </div>
<?php include(VIEW . 'layout/footer.php'); ?>
