<?php

$match = $router->match();

ActiveRecord\Config::initialize(function($cfg) use ($db) {
  $cfg->set_model_directory(ROOT_DIR . 'app/models');
  $cfg->set_connections([
    'development' => 'mysql://'.$db['user'].':'.$db['password'].'@'.$db['server'].'/'.$db['database']
  ]);
});

if ($match === false) {
    // 404 error
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
} else {
    list( $controller, $action ) = explode( '#', $match['target'] );
    if ( is_callable(array($controller, $action)) ) {
        call_user_func_array(array(new $controller, $action), array($match['params']));
    } else {
      // 500 error
      echo "Not found";
    }
}
