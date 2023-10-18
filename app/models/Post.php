<?php

namespace App\Models;

use Devlee\PHPMVCCore\DB\Model;


// Posts
class Post extends Model
{
  // Database Properties
  protected string $id;
  protected string $category_id = '';
  protected string $title = '';
  protected string $body = '';
  protected string $added_on;

  // Settings
  public string $order_by = 'id';   // Database property
  public string $direction = 'DESC';  // DESC|ASC

}
