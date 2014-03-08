<?php

class User extends Model {

  public $table = "users";
  public $id_user;
  public $username;
  public $password;

  public function __construct($id_user = NULL) {
    parent::__construct();
    if($id_user != NULL) {
      $this->get($id_user);
    }
  }

  public function all($id_user = NULL) {
    if($id_user != NULL) {
      $this->db->where("id_user", $id_user);
      return $this->db->getOne("users");
    } else {
      $cols = array("id_user, username, time_updated, time_created");
      return $this->db->get("users", null, $cols);
    }
  }

  public function get($id_user) {
    $this->db->where("id_user", $id_user);
    $user = $this->db->getOne("users");
    if($user){
      $this->id_user  = $user['id_user'];
      $this->username = $user['username'];
      $this->password = $user['password'];
      $this->gettimes("id_user", $this->id_user, $this->table);
    }
  }

  public function save() {
    $data = array(
      "username" => $this->username,
      "password" => $this->password
    );
    $this->id_user ? $this->update($data) : $this->create($data);
  }

  public function update($data) {
    $data["time_updated"] = time();
    $this->db->where("id_user", $this->id_user);
    $this->db->update('users', $data);
  }

  public function create($data) {
    $data["time_created"] = time();
    $this->get($this->db->insert('users', $data));
  }

  public function delete() {
    if($this->id_user != NULL) {
      $this->db->where("id_user", $this->id_user);
      $this->db->delete('users');
    }
  }

  public function exists(){
    if($this->id_user) {
      return true;
    } else {
      Redirect::to('users');
    }
  }

}
