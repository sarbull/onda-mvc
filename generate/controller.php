<?php

$class_name = ucfirst(strtolower($argv[1]));
$model_name_upper = ucfirst(strtolower($argv[2]));
$model_name_lower = strtolower($argv[2]);
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

  public function show($options) {
    $'. $model_name_lower .' = '. $model_name_upper .'::find($options["id"]);
    $this->view->set("'. $model_name_lower .'", $'. $model_name_lower .');
    $this->view->loadView("' . $view_name . '/show");
    $this->view->render();
  }

  public function create() {
    $this->view->loadView("' . $view_name . '/create");
    $this->view->render();
  }

  public function save() {
    $'. $model_name_lower .' = '. $model_name_upper .'::create($_POST["'. $model_name_lower .'"]);
  }

  public function edit($options) {
    $'. $model_name_lower .' = '. $model_name_upper .'::find($options["id"]);
    $this->view->set("'. $model_name_lower .'", $'. $model_name_lower .');
    $this->view->loadView("' . $view_name . '/edit");
    $this->view->render();
  }

  public function update($options) {
    $'. $model_name_lower .' = '. $model_name_upper .'::find($options["id"]);
    $'. $model_name_lower .'->update_attributes($_POST["'. $model_name_lower .'"]);
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


  wtf('app/views/' . $view_name . '/index.php', 'w', '    <h1>Index</h1>' . "\n");
  wtf('app/views/' . $view_name . '/show.php', 'w', '    <h1>Show</h1>' . "\n");

  $create_content = '
    <h1>Create new '. $model_name_upper .'</h1>
    <form action="<?=$this->router->generate("'. $view_name . '_save")?>" method="post">

      <button type="submit">Save</button>
    </form>' . "\n";
  wtf('app/views/' . $view_name . '/create.php', 'w', $create_content);

  $edit_content = '
    <h1>Edit '. $model_name_upper .'</h1>
    <form action="<?=$this->router->generate("'. $view_name . '_update", array("id"=> $id))?>" method="post">

      <button type="submit">Edit</button>
    </form>' . "\n";
  wtf('app/views/' . $view_name . '/edit.php', 'w', $edit_content);

$new_routes = '
  $router->map("GET", "/'. $view_name .'",                 "'. $class_name .'#index", "' . $view_name . '_index");
  $router->map("GET", "/'. $view_name .'/create",          "'. $class_name .'#create", "' . $view_name . '_create");
  $router->map("GET", "/'. $view_name .'/[i:id]/show",     "'. $class_name .'#show", "' . $view_name . '_show");
  $router->map("GET", "/'. $view_name .'/[i:id]/edit",     "'. $class_name .'#edit", "' . $view_name . '_edit");
  $router->map("POST", "/'. $view_name .'/save",           "'. $class_name .'#save", "' . $view_name . '_save");
  $router->map("POST", "/'. $view_name .'/[i:id]/update",  "'. $class_name .'#update", "' . $view_name . '_update");
  $router->map("POST", "/'. $view_name .'/[i:id]/destroy", "'. $class_name .'#destroy", "' . $view_name . '_destroy");' . "\n";
  wtf('config/routes.php', 'a', $new_routes);
} else {
  echo "Controller already exists.";
}

function wtf($file, $type, $content) {
  $my_file = fopen($file, $type) or die('Unable to open file!');
  fwrite($my_file, $content);
  fclose($my_file);
}

?>
