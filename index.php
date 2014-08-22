<?php

session_start();

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');

require(ROOT_DIR . 'config/config.php');

$application = new Application();

?>
