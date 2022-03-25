<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
  use SoftDeletes;

  protected $connection = 'internship';

  protected $dates = ['deleted_at'];

  protected $fillable = ['student_id', 'note'];

  
}
