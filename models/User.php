<?php
namespace Models;

use InvalidArgumentException;
/**
*用户模型
*
*
*/

class User extends \Phalcon\Mvc\Models
{
  private $id;
  protected $name;
  protected $phone;
  // 设置表明  默认为类名
  public function initialize()
  {
      // $this->setSource('toys_robot_parts');
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    if(strlen($name) > 50)
      throw new InvalidArgumentException("The name is too long");
    $this->name = $name;  
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPhone($phone)
  {
    if(intval($phone) !== 11)
      throw new InvalidArgumentException('The phone number error');
    $this->phone = $phone;
  }

  public function getPhone()
  {
    return $this->phone;
  }
}