<?php

class Model {
  public $db;
  function __construct() {
    global $config;
    // $this->db = new MysqliDb(
    //   $config['db_type'],
    //   $config['db_host'],
    //   $config['db_name'],
    //   $config['db_username'],
    //   $config['db_password']
    // );
    $this->db = new MysqliDb(
      $config['db_host'],
      $config['db_username'],
      $config['db_password'],
      $config['db_name']
    );
  }

  // 2 weeks ago
  public function timestamp($input){
    $input = explode(" ", $input);
    $time = time();
    $cantity = $input[0];
    $type = $input[1];
    switch ($type) {
      case "weeks":
        return $time - ($cantity*604800);
        break;
      case "week":
        return $time - ($cantity*604800);
        break;
      case "days":
        return $time - ($cantity*86400);
        break;
      case "day":
        return $time - ($cantity*86400);
        break;
    }
  }
}
