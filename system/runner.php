<?php

include ROOT_DIR . 'config/db.php';

foreach (glob(ROOT_DIR . 'app/controllers/*.php') as $filename) {
  include $filename;
}
foreach (glob(ROOT_DIR . 'app/models/*.php') as $filename) {
  include $filename;
}

$router = new AltoRouter();

include ROOT_DIR . 'system/helpers.php';

include ROOT_DIR . 'config/routes.php';

include ROOT_DIR . 'system/application.php';

