<?php

class User extends Model {

  public $table = "users";
  public $id_user;
  public $username;
  public $password;

  public function __construct($id_user = NULL){
    parent::__construct();
    if($id_user != NULL) {
      $this->get($id_user);
    }
  }

  public function get($id_user) {
    $this->db->where("id_user", $id_user);
    $user = $this->db->getOne("users");
    $this->id_user  = $user['id_user'];
    $this->username = $user['username'];
    $this->password = $user['password'];
  }

  public function all($id_user = NULL) {
    if($id_user != NULL) {
      $this->db->where("id_user", $id_user);
      return $this->db->getOne("users");
    } else {
      $cols = Array ("id_user, username");
      return $this->db->get("users", null, $cols);
    }
  }

  public function save(){
      $data = array(
        "username" => $this->username,
        "password" => $this->password
      );
    if($this->id_user != NULL) {
      $data["time_updated"] = time();
      $this->db->where("id_user", $this->id_user);
      $this->db->update('users', $data);
    } else {
      $data["time_created"] = time();
      $this->db->insert('users', $data);
    }
    Redirect::to('users');
  }

  public function delete() {
    if($this->id_user != NULL) {
      $this->db->where("id_user", $this->id_user);
      $this->db->delete('users');
    }
    Redirect::to('users');
  }

}
