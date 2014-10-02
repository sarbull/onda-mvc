<?php

$class_name = ucfirst(strtolower($argv[1]));
$view_name = strtolower($argv[1]);

if (!file_exists('app/controllers/' . $class_name . '.php')) {

  $file = fopen('app/controllers/' . $class_name . '.php', 'w') or die('Unable to open file!');
  $start = '<?php' . "\n";
  fwrite($file, $start);

$controller = '
class '. $class_name .' extends Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->view->loadView("' . $view_name . '/index");
    $this->view->render();
  }

  public function show() {
    $this->view->loadView("' . $view_name . '/show");
    $this->view->render();
  }


  public function edit() {
    $this->view->loadView("' . $view_name . '/edit");
    $this->view->render();
  }

  public function create() {
  }

  public function update() {
  }

  public function destroy() {
  }

}

';

  fwrite($file, $controller);
  $end = '?>' . "\n";
  fwrite($file, $end);
  fclose($file);

  mkdir('app/views/' . $view_name, 0777, true);

  $index = fopen('app/views/' . $view_name . '/index.php', 'w') or die('Unable to open file!');
  fwrite($index, '<h1>Index</h1>' . "\n");
  fclose($index);

  $show = fopen('app/views/' . $view_name . '/show.php', 'w') or die('Unable to open file!');
  fwrite($show, '<h1>Show</h1>' . "\n");
  fclose($show);

  $edit = fopen('app/views/' . $view_name . '/edit.php', 'w') or die('Unable to open file!');
  fwrite($edit, '<h1>Edit</h1>' . "\n");
  fclose($edit);


  $routes = fopen('config/routes.php', 'a') or die('Unable to open file!');
$new_routes = '
  $router->map("GET", "/'. $view_name .'", "'. $class_name .'#index", "' . $view_name . '_index");
  $router->map("GET", "/'. $view_name .'/[i:id]/show", "'. $class_name .'#show", "' . $view_name . '_show");
  $router->map("GET", "/'. $view_name .'/[i:id]/edit", "'. $class_name .'#edit", "' . $view_name . '_edit");
  $router->map("GET", "/'. $view_name .'/[i:id]/create", "'. $class_name .'#create", "' . $view_name . '_create");
  $router->map("POST", "/'. $view_name .'/[i:id]/update", "'. $class_name .'#update", "' . $view_name . '_update");
  $router->map("POST", "/'. $view_name .'/[i:id]/destroy", "'. $class_name .'#destroy", "' . $view_name . '_destroy");
';

  fwrite($routes, $new_routes);
  fclose($routes);
} else {
  echo "Controller already exists.";
}

?>
