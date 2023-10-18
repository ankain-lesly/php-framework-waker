<?php

namespace App\Model;

namespace Wakeable\App\Models;

use Devlee\PHPMVCCore\DB\Model;

// Categories
class Category extends Model
{
  // protected ID $id;
  // protected KEY $category_id = '';
  protected string $id;
  protected string $category_id = '';
  protected string $topic = '';
  protected string $created_on;

  public static function tableName(): string
  {
    return 'categories';
  }
}
