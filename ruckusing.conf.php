<?php
date_default_timezone_set('UTC');

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
require ROOT_DIR . 'config/db.php';

return [
  'db' => [
    'development' => [
      'type'     => 'mysql',
      'host'     => $db['host'],
      'port'     => 3306,
      'database' => $db['database'],
      'user'     => $db['user'],
      'password' => $db['password'],
      'charset'  => 'utf8',
    ],
  ],
  'migrations_dir' => ['default' => ROOT_DIR . '/db/migrations'],
  'db_dir' => ROOT_DIR . '/db',
  'log_dir' => ROOT_DIR . '/cache/logs',
  'ruckusing_base' => ROOT_DIR . '/vendor/ruckusing/ruckusing-migrations'
];
