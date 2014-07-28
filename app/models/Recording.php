<?php

class Recording extends \Phalcon\Mvc\Model
{
  public function initialize()
  {
      //Skips fields/columns on both INSERT/UPDATE operations
      //$this->skipAttributes(array('id'));
  }
}