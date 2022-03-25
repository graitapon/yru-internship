<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class FileController extends Controller
{

  public function __construct(Request $request)
  {
  }

  public function index(Request $request)
  {
  }

  public function store(Request $request)
  {
    //return $request->all();
    $param = [
      'token' => '3a3b6b0879fa4afaa74ea866923b6279'
    ];
    $f = $request->file;
    $res = Http::attach(
      'file', 
      file_get_contents($f),
      $f->getClientOriginalName()
    )->post('https://internship.yru.ac.th/api/files', $param);
    return $res;

  }

  public function show($id)
  {
  }

  public function update(Request $request, $id)
  {
  }

  public function destroy($id)
  {
    //
  }
}
