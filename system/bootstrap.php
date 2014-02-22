<?php

class Bootstrap {

  function __construct() {
    global $config;

    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    if (empty($url[0])) {
      require APP_DIR . 'controllers/'. $config['default_controller'] .'.php';
      $controller = new $config['default_controller']();
      $controller->index();
      return false;
    }

    $file = APP_DIR . 'controllers/' . $url[0] . '.php';
    if (file_exists($file)) {
      require $file;
    } else {
      $this->error();
      return;
    }

    $controller = new $url[0];

    if (isset($url[2])) {
      if (method_exists($controller, $url[1])) {
        $controller->{$url[1]}($url[2]);
      } else {
        $this->error();
      }
    } else {
      if (isset($url[1])) {
        if (method_exists($controller, $url[1])) {
          $controller->{$url[1]}();
        } else {
          $this->error();
        }
      } else {
        $controller->index();
      }
    }
  }

  function error() {
    global $config;
    require APP_DIR . 'controllers/'. $config['error_controller'] .'.php';
    $controller = new Error();
    $controller->index();
    return false;
  }

}
