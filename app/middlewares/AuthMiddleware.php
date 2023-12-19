<?php

namespace App\Middlewares;

use App\Models\User;
use Devlee\Framework\Waker\Services\Middlewares\BaseMiddleware;
use Devlee\WakerORM\Services\Session;

class AuthMiddleware extends BaseMiddleware
{
  public function __construct()
  {
    parent::__construct();
    // $this->UserObj = new User();

  }

  public function caseName(): string
  {
    return "AuthMiddleware";
  }

  /**
   * Code Here
   */
}
