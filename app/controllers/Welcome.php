<?php

class Welcome extends ApplicationController {

  public function index() {

    $u = new User();
    view('welcome.index');
  }

}
