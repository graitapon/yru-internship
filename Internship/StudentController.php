<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

  public function __construct(Request $request)
  {
    // any student
  }

  public function index(Request $request)
  {
    $d = [];

    $r = [
      'data' => $d,
      'tasks' => Task::where('student_id', 12345)->orderBy('id', 'desc')->get(),
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

    $name = $request->name;
    $d = $request->data;

    $reload = true;

    $r = [];

    switch ($name) {
      case 'xxx':
        break;

      case 'task':
        if (isset($d['add'])) {
          $a = Task::create(['student_id' => 12345, 'note' => 'งาน...']);
          $r = $a;
          $r['adding'] = true;
          $reload = false;
        }
        elseif (isset($d['edit'])) {
          $d = $d['edit'];
          $a = Task::where('student_id', 12345)->findOrFail($d['id']);
          $a->update(['note' => $d['note']]);
        }
        elseif (isset($d['cancel'])) {
          $a = Task::where('student_id', 12345)->findOrFail($d['cancel']);
          $a->delete();
        }
        
        break;

      case 'image':
        // https://picsum.photos/seed/picsum/200/300
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
