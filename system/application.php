<?php

class Application {

  function __construct($match = NULL) {
    global $config;
    global $router;
    $router = new AltoRouter();
    $router->setBasePath($config['base_path']);
    $this->routes();
    $match = $router->match();
    if($match){
      $load = explode("#", $match["target"]);
      $this->load($load[0], $load[1], $match['params']);
    } else {
      $this->error();
    }
  }

  public function load($controller, $method, $params) {
    $controller = new $controller;
    if(method_exists($controller, $method)) {
      $controller->{$method}($params);
    } else {
      $this->error();
    }
  }

  public function routes() {
    global $router;
    $router->map('GET|POST', '/',                                'dashboard#index',   'dashboard');
    $router->map('GET|POST', '/users',                            'users#index',      'users_index');
    $router->map('GET',      '/users.[xml|json:format]?',         'users#type',       'users_type');
    $router->map('GET',      '/users/[i:id]?.[xml|json:format]',  'users#type',       'user_type');
  }

  public function error() {
    $error = new error();
    $error->index();
  }
}
