<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model{
  protected $table = 'todos';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;
}
