<?php

$class_name_single = ucfirst(strtolower($argv[1]));
$view_name_multiply = strtolower($argv[2]);
$view_name = strtolower($argv[1]);

if (!file_exists('app/models/' . $class_name_single . '.php')) {

$file = fopen('app/models/' . $class_name_single . '.php', 'w') or die('Unable to open file!');
$start = '<?php' . "\n";
fwrite($file, $start);

$model = '
class '. $class_name_single .' extends ActiveRecord\Model {

}

';

fwrite($file, $model);
$end = '?>' . "\n";
fwrite($file, $end);
fclose($file);

$migration = fopen('db/migrations/' . date('YnjGis') .'_'. $view_name_multiply . '.sql', 'w') or die('Unable to open file!');

$table = '

CREATE TABLE '. $view_name_multiply .'(
  id int NOT NULL AUTO_INCREMENT,
';

$total = count($argv);
for ($i=3; $i < $total; $i++) { 
  $column = $argv[$i];
  $column = explode(':', $column);
  $table = $table . '  '. $column[0] .' '. $column[1] .'('. $column[2] .'),' . "\n";
}


$table = $table . '
  PRIMARY KEY (id)
);';

fwrite($migration, $table);
fclose($migration);

} else {
  echo "Model already exists.";
}
