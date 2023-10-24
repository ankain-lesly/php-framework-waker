<?php

namespace App\Controllers;

use App\Models\User;
use Devlee\PHPMVCCore\Services\Library;
use Devlee\PHPMVCCore\Services\Session;
use Devlee\PHPRouter\Request;
use Devlee\PHPRouter\Response;
use Devlee\PHPRouter\Router;

/**
 * Generated Controller
 */
class AuthController
{
  public function __construct()
  {
  }

  // Signup
  public function Signup(Request $req, Response $res)
  {
    Router::setLayout('layouts/AuthLayout');

    if ($req->isPost()) return $this->SignupUser($req, $res);

    $res->render('signup', 'Create Account', ['errors' => []]);
  }
  public function SignupUser(Request $req, Response $res)
  {
    $data = $req->body();
    $user = new User();

    $errors = $user->validate($data);

    if ($errors) {
      $res->render('signup', "Create Account", $errors);
    }

    $data['password'] = $user->hashString($data['password']);
    $data['user_id'] = Library::generateToken();

    if ($user->create($data)) {
      $res->redirect('/');
    }

    $res->render('signup', "Create Account");
  }

  // Login
  public function Login(Request $req, Response $res)
  {
    Router::setLayout('layouts/AuthLayout');

    if ($req->isPost()) return $this->LoginUser($req, $res);

    $res->render('login', 'Login', ['errors' => []]);
  }
  public function LoginUser(Request $req, Response $res)
  {
    $data = $req->body();
    $user = new User();

    $where = ['email' => $data['email'] ?? false, 'name' => $data['name'] ?? false];

    $user_data = $user->findOne($where, [], 'OR');

    if ($user_data) {
      if (!$user->verifyHashed($data['password'], $user_data['password'])) {
        $error = [
          'message' => 'Username or password is incorrect'
        ];

        $error['values']['email'] = $data['email'];
        $res->render('login', context: $error);
      }

      $this->setUser($user_data);
      $res->redirect('/?logged-in=native');
    }

    // Form Errors
    $errors['message'] = 'Invalid login credentials';
    $errors['values']['email'] = $data['email'];

    $res->render('login', context: $errors);
  }

  // * lOGOUT
  public function Logout(Request $req, Response $res)
  {
    $session = new Session();
    $session->clear('user');
    $res->redirect('/');
  }

  // Set User:
  private function setUser(array $data)
  {
    $session = new Session();
    $user_data = array(
      'name' => $data['name'],
      'email' => $data['email'],
      'user_id' => $data['user_id'],
      'role' => $data['role'] ?? 1,
    );
    // $this->Session->set('user', $user_data);
    $session->set('user', $user_data);
  }
}
