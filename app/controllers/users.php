<?php

class Users extends Controller {

  public function __construct(){
    parent::__construct();
  }

  public function index($params = NULL) {
    $template = $this->loadView('users/index');
    $template->render();
  }

  public function test($params = NULL) {
    $template = $this->loadView('users/test');
    $template->render();
  }

}
