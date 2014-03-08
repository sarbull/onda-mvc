<?php

class Uploader {
  public $upload_folder;
  public $file_name;

  public function __construct(){
    global $config;
    $this->upload_folder = $config["upload_folder"];
  }

  public function check_file($file) {
    if($file["error"] == 0) {
      return true;
    } else {
      return false;
    }
  }

  public function upload($file) {
    $this->file_name = $this->random_name($file["name"]);
    if (file_exists($this->upload_folder . $this->file_name)) {
      return false;
    } else {
      move_uploaded_file($file["tmp_name"], $this->upload_folder . $this->file_name);
      return true;
    }
  }

  public function random_name($name){
    $name = str_replace(" ", "-", $name);
    $this->file_name = mt_rand(40000, 300000) . "-" . $name;
    return $this->file_name;
  }
}
