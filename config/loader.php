<?php

$loader = new \Phalcon\Loader();
$loader->registerNamespaces([
  'Services' => realpath(__DIR__.'/../services'),
  'Controllers' => realpath(__DIR__.'/../controllers'),
  'Models' => realpath(__DIR__.'/../models')
]);

$loader->register();
