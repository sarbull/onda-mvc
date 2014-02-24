<?php

session_start();

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
require(ROOT_DIR . 'config/config.php');

function __autoload($class) {
  if(file_exists(LIBS . $class .".php")){
    require LIBS . $class .".php";
  }
  if(file_exists(MODELS . $class .".php")){
    require MODELS . $class .".php";
  }
}

$bootstrap = new Bootstrap();

?>
