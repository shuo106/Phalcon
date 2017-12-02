<?php

use Controllers\HttpException;
try {
  // loading Configs
  $config = require(dirname(__DIR__).'/config/config.php');
  // autoloading classes
  require dirname(__DIR__).'/config/loader.php';
  // initializing DI container
  $id = require dirname(__DIR__).'/config/di.php';
  // initializing application
  $app = new \Phalcon\Mvc\Micro();

  $app->setDI($di);
  //setting up routing
  require dirname(__DIR__).'/config/routes.php';

  //config response
  $app->after(function() use($app){
    // return json or xml response
    $return = $app->getReturnedValue();
    if(is_array($return)) {
      // Transforming arrays JSON
      $app->response->setContent(json_encode($return));
    } else if(!strlen($return)) {
      // Successful response without any content
      $app->response->setStatusCode('204', 'No Content');
    } else {
      throw new Exception('Bad Response');
    }
    // Sending response to the client
    $app->response->send();
  });
  // processing request
  $app->handle();

} catch(HttpException $e){
  $response = $app->response;
  $response->setStatusCode($e->getCode(), $e->getMessage());
  $response->setJsonContent($e->getAppError());
  $response->send();
} catch(\Phalcon\Http\Request\Exception $e){
  $app->response->setStatusCode(400, 'Bad request')
                ->setJsonContent([
                  HttpException::KEY_CODE => 400,
                  HttpException::KEY_MESSAGE => 'Bad request'
                ])->send();
} catch (\Exception $e) {
  // Standard error format
  $result = [
    HttpException::KEY_CODE => 500,
    HttpException::KEY_MESSAGE => $e->getMessage()
  ];

  // Sending error response
  $app->response->setStatusCode(500, 'Internal Server Error')->setJsonContent($result)
    ->send();
}