<?php

class View {

  public $yield;
  public $pageVars = array();
  public $css      = array();
  public $js       = array();
  public $router;
  public $parts    = array();

  public function __construct() {
    global $router;
    $this->router = $router;
    $this->parts["menu"] = VIEW . 'layout/menu.php';
    $this->setCSS(array(
      array("public/css/reset.css"),
      array("public/css/style.css"),
      array("public/css/menu.css")
    ));
    $this->setJS(array(
      array("public/js/jquery-1.11.0.min.js")
    ));
  }

  public function loadView($yield) {
    $this->yield = APP_DIR .'views/'. $yield .'.php';
  }

  public function set($var, $val) {
    $this->pageVars[$var] = $val;
  }

  public function render(){
    extract($this->pageVars);
    ob_start();
    require(VIEW . 'layout/page.php');
    echo ob_get_clean();
  }

  public function setCSS($files) {
    foreach ($files as $file) {
      $http = substr($file[0], 0, 7);
      if($http == 'http://'){
        array_push($this->css, $file[0]);
      } else {
        array_push($this->css, BASE_URL . $file[0]);
      }
    }
  }

  public function setJS($files) {
    foreach ($files as $file) {
      $http = substr($file[0], 0, 7);
      if($http == 'http://'){
        array_push($this->js, $file[0]);
      } else {
        array_push($this->js, BASE_URL . $file[0]);
      }
    }
  }

}
