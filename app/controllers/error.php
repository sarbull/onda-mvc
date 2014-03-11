<?php

class Error extends Controller {

  function index() {
    $this->error404();
  }

  function error404() {
    $this->view->loadView('errors/404');
    $this->view->parts["menu"] = NULL;
    $this->view->set('page_title', '404 Error');
    $this->view->setJS(array(
      array('public/js/404.js')
    ));
    $this->view->render();
  }

}
