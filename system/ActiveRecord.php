<?php
if (!defined('PHP_VERSION_ID') || PHP_VERSION_ID < 50300)
  die('PHP ActiveRecord requires PHP 5.3 or higher');

define('PHP_ACTIVERECORD_VERSION_ID','1.0');

if (!defined('PHP_ACTIVERECORD_AUTOLOAD_PREPEND'))
  define('PHP_ACTIVERECORD_AUTOLOAD_PREPEND', true);

require LIBS . 'php-activerecord/Singleton.php';
require LIBS . 'php-activerecord/Config.php';
require LIBS . 'php-activerecord/Utils.php';
require LIBS . 'php-activerecord/DateTime.php';
require LIBS . 'php-activerecord/Model.php';
require LIBS . 'php-activerecord/Table.php';
require LIBS . 'php-activerecord/ConnectionManager.php';
require LIBS . 'php-activerecord/Connection.php';
require LIBS . 'php-activerecord/Serialization.php';
require LIBS . 'php-activerecord/SQLBuilder.php';
require LIBS . 'php-activerecord/Reflections.php';
require LIBS . 'php-activerecord/Inflector.php';
require LIBS . 'php-activerecord/CallBack.php';
require LIBS . 'php-activerecord/Exceptions.php';
require LIBS . 'php-activerecord/Cache.php';

if (!defined('PHP_ACTIVERECORD_AUTOLOAD_DISABLE'))
  spl_autoload_register('activerecord_autoload', false, PHP_ACTIVERECORD_AUTOLOAD_PREPEND);

