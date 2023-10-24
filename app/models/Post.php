<?php

namespace App\Models;

use Devlee\PHPMVCCore\DB\Model;


// Posts
class Post extends Model
{
  // Database Properties
  protected string $_id;
  protected string $topic_id = '';
  protected string $user_id = '';
  protected string $post_id = '';
  protected string $title = '';
  protected string $body = '';
  protected string $slug = '';
  protected string $added_on;

  // Settings
  public string $order_by = '_id';   // Database property
  public string $direction = 'DESC';  // DESC|ASC

}
