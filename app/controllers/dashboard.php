<?php

class Dashboard extends Controller {

  public function __construct(){
    parent::__construct();
  }

  public function index() {
    $this->view->loadView('dashboard/index');
    $this->view->render();
  }

}
