<?php
namespace Services;

/**
*业务层
*
*
*/

class BaseService extends \Phalcon\Di\Injectable
{
  // Invalid parameters anywhere
  const ERROR_INVALID_PARAMETERS = 10001;
  // Record already exists
  const ERROR_ALREADY_EXISTS = 10002;
}