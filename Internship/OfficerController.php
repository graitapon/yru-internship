<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficerController extends Controller
{

  public function __construct(Request $request)
  {
    // any officer
  }

  public function index(Request $request)
  {

    $years = [2565, 2564];
    $year = 2564;

    $d = [];

    // $request->
    // getStudents(faculty_id, dep_id)

    $r = [
      'years' => $years,
      'year' => $year,
      'data' => [],
      'faculties' => Fx::getEduFaculties(),
      'deps' => Fx::getEduDepartments(4),
      'students' => Fx::getEduStudents(),
    ];

    return $r;
  }

  public function store(Request $request)
  {
  }

  public function show($id)
  {
    $a = Fx::getEduStudent($id);
    if (!$a) {
      return response(['message' => 'Data not found'], 404);
    }
    
    $r = [
      'any' => [],
    ];

    return array_merge($a, $r);
  }

  public function update(Request $request, $id)
  {

  }

  public function destroy($id)
  {
    //
  }
}
