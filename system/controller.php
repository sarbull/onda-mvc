<?php

class Controller {

  public $model;

  public function __construct($model = NULL){
    if($model != NULL) {
      $this->model  = new $model;
    }
  }

  public function loadModel($name){
    require(APP_DIR .'models/'. strtolower($name) .'.php');
    $model = new $name;
    return $model;
  }

  public function loadView($name){
    $view = new View($name);
    return $view;
  }
  
  public function redirect($loc){
    global $config;
    header('Location: '. $config['base_url'] . $loc);
  }


  public function type($params = NULL) {
    if(isset($params["id"])){
      $this->format($params["id"], $params["format"]);
    } else {
      $this->format(NULL, $params["format"]);
    }
  }

  public function format($id = NULL, $format){
    switch ($format) {
      case 'json': $this->json($id); break;
      case 'xml': $this->xml($id); break;
      default: break;
    }
  }

  public function json($id = NULL) {
    header('Content-Type: application/json');
    if($id == NULL) {
      $users = $this->model->all();
    } else {
      $users = $this->model->all($id);
    }
    echo json_encode($users);
  }

  public function xml($id) {
    header('Content-Type: application/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    if($id != NULL) {
      echo '<user><id>2</id><username>sarbull</username></user>';
    } else {
      echo '<user><id>1</id><username>admin</username></user>';
      echo '<user><id>2</id><username>sarbull</username></user>';
    }
  }

}
