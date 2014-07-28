<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
      $this->assets
        ->addJs('js/mousetracks.js')
        ->addJs('js/jquery-ui.min.js')
        ->addCss('css/jquery-ui.min.css')
        ->addCss('jquery-ui.theme.min.css');
    }
}

