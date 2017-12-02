<?php

return new \Phalcon\Config([
  // 数据库配置
  'database' => [
    'adapter' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'username' => 'test',
    'password' => '123456',
    'dbname' => 'test'
  ],

  'application' => [
    'controllersDir' => 'api/controllers/',
    'modelsDir' => 'api/models',
    'baseUri' => '/'
  ]
]);