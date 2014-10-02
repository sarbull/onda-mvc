<?php

$class_name = ucfirst(strtolower($argv[1]));
$view_name = strtolower($argv[1]);

if (!file_exists('app/models/' . $class_name . '.php')) {

$file = fopen('app/models/' . $class_name . '.php', 'w') or die('Unable to open file!');
$start = '<?php' . "\n";
fwrite($file, $start);

$model = '
class '. $class_name .' extends ActiveRecord\Model {

}

';

fwrite($file, $model);
$end = '?>' . "\n";
fwrite($file, $end);
fclose($file);
} else {
  echo "Model already exists.";
}
