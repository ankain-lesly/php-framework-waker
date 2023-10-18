<?php

namespace App\Model;

namespace App\Models;

use Devlee\PHPMVCCore\DB\Model;

// Categories
class Category extends Model
{
  protected string $id;
  protected string $category_id = '';
  protected string $topic = '';
  protected string $created_on;
}
