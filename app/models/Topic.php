<?php

namespace App\Models;

use Devlee\PHPMVCCore\DB\Model;

/**
 * Generated Model
 */
class Topic extends Model
{
  // Database Properties 
  protected string $_id = '';
  protected string $topic_id = '';
  protected string $topic = '';
  protected string $created_on = '';


  // Settings
  public string $order_by = '_id';     // Database property
  public string $direction = 'DESC';  // DESC|ASC


}
