<?php

class Users extends Controller {

  public function __construct(){
    parent::__construct("user");
  }

  public function index(){
    $this->view->loadView('users/index');
    $this->view->set('page_title', 'Users index page');
    $this->view->set('users', $this->model->prepare($this->model->all()));
    $this->view->render();
  }

  public function create(){
    $this->view->loadView('users/new');
    $this->view->set('page_title', 'Create new user');
    $this->view->render();
  }

  public function show($params){
    $this->model->get($params["id"]);
    $this->model->exists();
    $this->view->loadView('users/show');
    $this->view->set('page_title', 'View user: ' . $this->model->username);
    $this->view->set('user', $this->model);
    $this->view->render();
  }

  public function update($params){
    $this->model->get($params["id"]);
    $this->model->exists();
    $this->view->loadView('users/edit');
    $this->view->set('page_title', 'Edit user: ' . $this->model->username);
    $this->view->set('user', $this->model);
    $this->view->render();
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
    Redirect::to('users');
  }

  public function destroy($params){
    $this->model->get($params["id"]);
    $this->model->delete();
    Redirect::to('users');
  }

}
