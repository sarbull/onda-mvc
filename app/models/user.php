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
    $user = $this->db->select("SELECT * FROM users WHERE id_user=" . $id_user);
    $this->id_user  = $user[0]['id_user'];
    $this->username = $user[0]['username'];
    $this->password = $user[0]['password'];
  }

  public function all($id_user = NULL) {
    if($id_user != NULL) {
      return $this->db->select("SELECT id_user, username FROM users WHERE id_user=" . $id_user);
    } else {
      return $this->db->select("SELECT id_user, username FROM users;");
    }
  }

  public function save(){
      $data = array(
        "username" => $this->username,
        "password" => $this->password
      );
    if($this->id_user != NULL) {
      $data["time_updated"] = time();
      $this->db->update($this->table, $data, "`id_user`='" . $this->id_user . "'");
    } else {
      $data["time_created"] = time();
      $this->db->insert($this->table, $data);
    }
  }

  public function delete() {
    if($this->id_user != NULL) {
      $this->db->delete($this->table, "`id_user`='" . $this->id_user . "'");
    }
  }

}
