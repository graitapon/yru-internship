<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
  use SoftDeletes;

  protected $connection = 'internship';

  protected $dates = ['deleted_at'];

  protected $fillable = ['student_id', 'officer_id'];
  
}
