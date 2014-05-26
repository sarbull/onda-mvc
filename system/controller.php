<?php

class Controller {

  public $model;
  public $view;
  public $error;

  public function __construct($model = NULL){
    if($model != NULL) {
      $this->model  = new $model;
    }
    $this->view = new View();
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
      default: break;
    }
  }

  public function json($id = NULL) {
    header('Content-Type: application/json');
    $data = $this->model->all($id);
    echo json_encode($data);
    exit;
  }

}
