<?php

session_start();

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');

$config_file = ROOT_DIR . 'config/config.php';

if(file_exists($config_file)){
  require($config_file);
} else {
  die("Make sure that you create the /config/config.php file.");
}

$application = new Application();

?>
