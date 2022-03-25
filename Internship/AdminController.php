<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

  public function __construct(Request $request)
  {
    // any users
  }

  public function index(Request $request)
  {
    $d = [];

    $r = [
      'data' => $d,
    ];

    return $r;
  }

  public function store(Request $request)
  {
  }

  public function show($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
  }

  public function destroy($id)
  {
    //
  }
}
