<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlaceStudent extends Model
{
  use SoftDeletes;

  protected $connection = 'internship';

  protected $dates = ['deleted_at'];

  protected $fillable = ['year', 'place_id', 'student_id', 'status_id'];
  
}
