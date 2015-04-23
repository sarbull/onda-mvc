<?php

use duncan3dc\Laravel\Blade;
use duncan3dc\Laravel\BladeInstance;

function view($view) {
  $blade = new BladeInstance(ROOT_DIR . 'app/views');
  $blade->addPath(ROOT_DIR . 'app/views');
  echo $blade->render($view);
}
