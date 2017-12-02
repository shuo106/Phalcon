<?php
use Phalcon\Mvc\Micro\Collection;
// 配置路由
$user = new Collection();

// 程序运行时加载
// $user->setHandler(new Controllers\UserController());
// 懒加载模式 
$user->setHandler('Controllers\UserController', true);
$user->setPrefix('/user');
$user->get('/', 'index');
$user->post('/create', 'createAction');
$user->get('/list', 'userListAction');
$user->post('/delete', 'delete');
$app->mount($user);


// not found URLs
$app->notFound(
  function () use ($app) {
    throw new Exception('URI not found or method not match');
  }
);