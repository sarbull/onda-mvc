<?php

class Error extends Controller {

  function index() {
    $this->error404();
  }

  function error404() {
    $template = $this->loadView('errors/404');
    $template->parts["menu"] = NULL;
    $template->set('page_title', '404 Error');
    $template->render();
  }

}
