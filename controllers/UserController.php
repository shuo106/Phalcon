<?php

namespace Controllers;

class UserController extends BaseController
{

  public function index()
  {
    return [
      'msg' => 'index'
    ];
  }
  /** add user */
  public function createAction()
  {
    // Init block
    $errors = [];
    $data = [];
    // 
    $data['name'] = $this->request->getPost('name');
    if(!is_string($data['name']))
    {
      $errors['name'] = 'Login must consist of 6-16 latin symbols';
    }
    $data['password'] = $this->request->getPost('password');
    
    return [
      'msg' => 'create'
    ];
  }

  // return user list
  public function userListAction()
  {
    return [
      'msg' => 'ok'
    ];
  }

  public function delete()
  {
    return [
      'msg' => 'delete'
    ];
  }
}