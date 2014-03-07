<?php

class Dashboard extends Controller {

  public function index() {
    $template = $this->loadView('dashboard/index');
    $template->setCSS(array(array("public/css/style.css", "intern")));
    $template->setJS(array(array("public/js/index.js", "intern")));
    $template->render();
  }

}
