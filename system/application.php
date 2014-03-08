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
    $this->mapdefault("users");

  }

  public function mapdefault($controller) {
    global $router;
    $router->map('GET',      '/'.$controller .'/create',        $controller .'#create',  $controller.'_create');
    $router->map('GET',      '/'.$controller .'/[i:id]/show',   $controller .'#show',    $controller.'_show');
    $router->map('GET',      '/'.$controller .'/[i:id]/edit',   $controller .'#update',  $controller.'_edit');
    $router->map('POST',     '/'.$controller .'/[i:id]/save',   $controller .'#update',  $controller.'_save');
    $router->map('POST',     '/'.$controller .'/create',        $controller .'#save',    $controller.'_create_and_save');
    $router->map('POST',     '/'.$controller .'/[i:id]/edit',   $controller .'#save',    $controller.'_edit_and_save');
    $router->map('POST',     '/'.$controller .'/[i:id]/delete', $controller .'#destroy', $controller.'_destroy');
  }

  public function error() {
    $error = new error();
    $error->index();
  }
}
