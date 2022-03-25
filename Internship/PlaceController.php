<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{

  public function __construct(Request $request)
  {
    // any users
  }

  public function index(Request $request)
  {
    $d = [];

    if ($request->q) {

    }

    $a = Place::get();

    $r = [
      'data' => $a,
    ];

    $canAdd = true;
    if ($canAdd) {
      $r['can_add'] = true;
    }

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
    // $this->middleware(['auth:api']);

    $name = $request->name;
    $d = $request->data;

    $reload = true;

    $r = [];

    switch ($name) {
      case 'add':
        Place::create(['name' => 'New']);
        break;

      case 'edit':
        $a = Place::findOrFail($d['id']);
        $a->update([$d['name'] => $d['data']]);
        break;

      case 'delete':
        $a = Place::findOrFail($d);
        $a->delete();
        break;
  
    }

    if ($reload) {
      $r['reload'] = true;
    }

    return $r;
  }

  public function destroy($id)
  {
    //
  }
}
