<?php

class Model {
  public $db;
  function __construct() {
    global $config;
    $this->db = new Database(
      $config['db_type'],
      $config['db_host'],
      $config['db_name'],
      $config['db_username'],
      $config['db_password']
    );
  }

}
