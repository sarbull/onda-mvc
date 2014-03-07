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
    global $router;
    $controller = new $controller;
    if(method_exists($controller, $method)) {
      $controller->{$method}($params);
    } else {
      $this->error();
    }
  }

  public function routes() {
    global $router;
    $router->map('GET',      '/',                                'dashboard#index', 'dashboard');
    $router->map('GET',      '/users',                           'users#index',     'users_index');
    $router->map('GET',      '/users.[xml|json:format]?',        'users#type',      'users_type');
    $router->map('GET',      '/users/[i:id]?.[xml|json:format]', 'users#type',      'user_type');

    $router->map('GET',      '/users/create',                    'users#create',    'user_create');
    $router->map('GET',      '/users/[i:id]/show',               'users#show',      'user_show');
    $router->map('GET',      '/users/[i:id]/edit',               'users#update',    'user_edit');
    $router->map('POST',     '/users/[i:id]/save',               'users#update',    'user_save');
    $router->map('POST',     '/users/create',                    'users#save',      'user_create_and_save');
    $router->map('POST',     '/users/[i:id]/edit',               'users#save',      'user_edit_and_save');
    $router->map('POST',     '/users/[i:id]/delete',             'users#destroy',   'user_destroy');

  }

  public function error() {
    $error = new error();
    $error->index();
  }
}
