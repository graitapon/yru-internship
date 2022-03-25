<?php

namespace App\Http\Controllers\Internship;

use App\Http\Controllers\Edu\Department;
use App\Http\Controllers\Edu\Faculty;
use App\Http\Controllers\Edu\Student;
use Illuminate\Support\Facades\Http;

class Fx {

  // any functions

  public static function xxx()
  {

  }


  public static function getEduFaculties()
  {
    $a = Faculty::whereIn('facultyid', [1,2,3,4])->get();
    $d = [];
    foreach ($a as $v) {
      $d[] = [
        'id' => $v->facultyid,
        'name' => $v->facultyname,
      ];
    }
    return $d;
  }

  public static function getEduDepartments($faculty_id)
  {
    $a = Department::where('facultyid', $faculty_id)->get();
    $d = [];
    foreach ($a as $v) {
      $d[] = [
        'id' => $v->departmentid,
        'name' => str_replace('หมู่วิชา', '', $v->departmentname),
      ];
    }
    return $d;

  }

  public static function getEduStudents()
  {
    // $a = Http::withOptions([
    //   'verify' => false,
    // ])->get('https://eservice.yru.ac.th/apis/edu-students', $param);

    // return $a->json();

    $y = 2564; //$request->year ?? 2564;
    $f = 4; //$request->faculty_id ?? null;
    // $s = $request->dep_id ?? null;

    $w = [
      ['admitacadyear', $y],
    ];

    if ($f) {
      $w[] = ['facultyid', $f];
    }


    $a = Student::where($w)->orderBy('studentcode')->take(10)->get();

    // if ($request->q) {
    //   $this->q = '%' . $request->q . '%';

    //   $d = $a->where(function ($query) {
    //     $query->where('studentcode', 'like', $this->q)
    //       ->orWhere('studentname', 'like', $this->q)
    //       ->orWhere('studentsurname', 'like', $this->q);
    //   })->paginate();
    // }

    $d = [];
    foreach ($a as $v) {
      $d[] = [
        'id' => $v->studentcode,
        'name' => $v->studentname.' '.$v->studentsurname,
      ];
    }

    return $d;


  }

  public static function getEduStudent($code)
  {
    $a = Student::where('studentcode', $code)->first();
    if ($a) {
      return [
        'id' => $a->studentcode,
        'name' => $a->studentname.' '.$a->studentsurname,
      ];
    }
    return null;
  }



}
