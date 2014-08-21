<?php

class Redirect {

  public static function to($url) {
    header("Location: " . BASE_URL . $url);
    exit;
  }

}
