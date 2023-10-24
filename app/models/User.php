<?php

namespace App\Models;

use Devlee\PHPMVCCore\DB\Model;
use Devlee\PHPMVCCore\Services\ObjectSchema;

/**
 * Generated Model
 */
class User extends Model
{
  // Constants | role_id
  public const ROLE_USER = 1;
  public const ROLE_ADMIN = 2;
  public const ROLE_MASTER = 3;

  // Database Properties 
  protected string $_id;
  protected string $user_id = '';
  protected string $name = '';
  protected string $email = '';
  protected string $password = '';
  protected string $role;
  protected string $added_on;

  public function validate(array $data)
  {
    $schema = new ObjectSchema($this);
    return $schema->validate($data);
  }


  public function rules(): array
  {
    return [
      "name" => "required,min|2,max|20",
      "email" => "required,email,unique",
      "password" => "required,min|4,max|6",
      "confirm_password" => "required,same|password >> Man give me a good password!"
    ];
  }
}
