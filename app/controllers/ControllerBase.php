<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
  public function initialize()
  {
    $this->assets
      ->addCss('css/bootstrap.min.css')
      ->addCss('css/style.css')
      ->addJs('js/jquery.min.js')
      ->addJs('js/bootstrap.min.js');
  }
}