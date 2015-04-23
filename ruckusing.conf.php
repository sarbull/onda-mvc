<?php
date_default_timezone_set('UTC');

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');

return [
  'db' => [
    'development' => [
      'type' => 'mysql',
      'host' => 'localhost',
      'port' => 3306,
      'database' => 'onda',
      'user' => 'onda_user',
      'password' => 'onda_password',
      'charset' => 'utf8',
    ],
  ],
  'migrations_dir' => ['default' => ROOT_DIR . '/db/migrations'],
  'db_dir' => ROOT_DIR . '/db',
  'log_dir' => ROOT_DIR . '/cache/logs',
  'ruckusing_base' => ROOT_DIR . '/vendor/ruckusing/ruckusing-migrations'
];
