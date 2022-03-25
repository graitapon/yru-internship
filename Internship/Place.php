<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
  use SoftDeletes;

  protected $connection = 'internship';

  protected $dates = ['deleted_at'];

  protected $fillable = ['name', 'address', 'phone'];
  
}
