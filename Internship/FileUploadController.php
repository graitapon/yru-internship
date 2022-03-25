<?php

namespace App\Http\Controllers\Internship;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
  public function index(Request $request)
  {
  }

  public function store(Request $request)
  {
    $token = $request->token ?? '';
    if ($token != '3a3b6b0879fa4afaa74ea866923b6279') {
      return response(['messge' => 'Invalid Token'], 403);
    } 

    if ($file = $request->file) {
      $folder = $request->folder ?? 'temp';
      $path = $file->store($folder);
      $name = $file->getClientOriginalName();

      return response()->json([
        'name' => $name,
        'url' => 'https://internship.yru.ac.th/api/public/files/'.$path,
      ]);
    }
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
