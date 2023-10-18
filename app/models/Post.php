<?php

namespace Wakeable\App\Models;

use Devlee\PHPMVCCore\DB\Model;


// Posts
class Post extends Model
{
  // protected ID $id;
  // protected KEY $category_id = '';

  // Database Properties
  protected string $id;
  protected string $category_id = '';
  protected string $title = '';
  protected string $body = '';
  protected string $added_on;

  // Settings
  public string $order_by = 'id';   // Database property
  public string $direction = 'DESC';  // DESC|ASC

  public static function tableName(): string
  {
    return 'posts';
  }
}
