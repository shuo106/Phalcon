<?php

namespace Controllers;

/**
*Class ApiController
*
*@property \Phalcon\Http\Request     $request
*@property \Phalcon\Http\Response     $response
*@property \Phalcon\Db\Adapter\Pdo\Mysl   $db
*@property
*
*/

class BaseController extends \Phalcon\Mvc\Controller
{
  /** Route not found. HTTP 404 Error */
  const ERROR_NOT_FOUND = 1;

  /** Invalid Request. HTTP 400 Error. */
  const ERROR_INVALID_REQUEST = 2;
} 