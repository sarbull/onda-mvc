<?php

class Application {

  function __construct() {
    global $config;
    global $router;
    $router = new AltoRouter();
    $router->setBasePath($config['base_path']);
    $this->routes();
    $this->handleRequest();
  }

  public function handleRequest() {
    global $router;
    $match = $router->match();
    if($match){
      $load = explode("#", $match["target"]);
      $this->loadController($load[0], $load[1], $match['params']);
    } else {
      die('page not found.');
    }
  }

  public function loadController($controller, $method, $params) {
    $controller = new $controller;
    if(method_exists($controller, $method)) {
      $controller->{$method}($params);
    } else {
      die('controller file not found.');
    }
  }

  public function routes() {
    global $router;
    include("config/routes.php");
  }

}
