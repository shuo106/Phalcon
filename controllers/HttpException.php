<?php
namespace Controllers;

class HttpException extends \Phalcon\Application\Exception
{
  const KEY_CODE = 'erorr';
  const KEY_DETAILS = 'details';
  const KEY_MESSAGE = 'error_description';
}