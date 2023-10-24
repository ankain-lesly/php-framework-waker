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
   * is a user
   */
  public static function isUser($options = false)
  {
    $role = (int) (new Session())->get('user')['role'];

    if ($role < User::ROLE_USER)
      header("Location: /");
  }

  /**
   * is an admin
   */
  public static function isAdmin()
  {
    $role = (int) (new Session())->get('user')['role'];
    if ($role < User::ROLE_ADMIN)
      header("Location: /");
  }

  /**
   * is a master admin
   */
  public static function isMaster()
  {
    $role = (int) (new Session())->get('user')['role'];

    if ($role < User::ROLE_MASTER)
      header("Location: /");
  }
}
