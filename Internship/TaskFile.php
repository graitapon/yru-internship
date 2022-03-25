<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskFile extends Model
{
  use SoftDeletes;

  protected $connection = 'internship';

  protected $dates = ['deleted_at'];
  
  // type ~ image, video, doc
  protected $fillable = ['task_id', 'name', 'url', 'type'];
  
}
