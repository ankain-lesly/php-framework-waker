<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Topic;
use App\Models\User;

use Devlee\WakerORM\Services\Session;
use Devlee\WakerRouter\Request;
use Devlee\WakerRouter\Response;

/**
 * Generated Controller
 */
class MainController
{
  public function __construct()
  {
  }

  // Index
  public function Index(Request $req, Response $res)
  {
    $res->render('home', "Welcome to waker");
  }
}
