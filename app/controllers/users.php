<?php

class Users extends Controller {

  public function __construct(){
    parent::__construct("user");
  }

  public function index(){
    $template = $this->loadView('users/index');
    $template->set('users', $this->model->prepare($this->model->all()));
    $template->render();
  }

  public function create(){
    $template = $this->loadView('users/new');
    $template->render();
  }

  public function show($params){
    $this->model->get($params["id"]);
    $template = $this->loadView('users/show');
    $template->set('user', $this->model);
    $template->render();
  }

  public function update($params){
    $this->model->get($params["id"]);
    $template = $this->loadView('users/edit');
    $template->set('user', $this->model);
    $template->render();
  }

  public function save($params){
    if(isset($params["id"])){
      $this->model->get($params["id"]);
    }
    $this->model->username = $_POST['username'];
    $this->model->password = $_POST['password'];
    if (!empty($_FILES['profile_picture'])) {
      $uploader = new Uploader();
      $uploader->upload($_FILES['profile_picture']);
    }
    $this->model->profile_picture = $uploader->file_name;
    $this->model->save();
  }

  public function destroy($params){
    $this->model->get($params["id"]);
    $this->model->delete();
  }

}
