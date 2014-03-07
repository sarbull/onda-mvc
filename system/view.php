<?php

class View {

  public  $template;
  public  $pageVars = array();
  public  $css      = array();
  public  $js       = array();
  public  $router;

  public function __construct($template) {
    global $router;
    $this->router = $router;
    $this->template = APP_DIR .'views/'. $template .'.php';
    // $this->setCSS(array(array("public/css/reset.css", "intern")));
  }

  public function set($var, $val) {
    $this->pageVars[$var] = $val;
  }

  public function render(){
    extract($this->pageVars);
    ob_start();
    require($this->template);
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
