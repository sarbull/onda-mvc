<?php

class View {

  public $yield;
  public $pageVars = array();
  public $css      = array();
  public $js       = array();
  public $router;
  public $parts = array();

  public function __construct($yield) {
    global $router;
    $this->router = $router;
    $this->yield = APP_DIR .'views/'. $yield .'.php';
    $this->parts["menu"] = VIEW . 'layout/menu.php';
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
      if($file[1] == "intern") {
        array_push($this->css, BASE_URL . $file[0]);
      }
      if($file[1] == "extern") {
        array_push($this->css, $file[0]);
      }
    }
  }

  public function setJS($files) {
    foreach ($files as $file) {
      if($file[1] == "intern") {
        array_push($this->js, BASE_URL . $file[0]);
      }
      if($file[1] == "extern") {
        array_push($this->js, $file[0]);
      }
    }
  }

}
