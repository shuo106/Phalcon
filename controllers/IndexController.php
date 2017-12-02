<?php

use Phalcon\Http\Response;

class IndexController extends BaseController
{
  public function indexAction()
  {
    echo '<h1>Hello!<h1>';
  }

  public function sayAction()
  {
    return json_encode(['name'=>'zhou', 'age' => 27]);
  }
}