<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
  public function index()
  {
    return view('students.index');
  }
  public function show($id)
  {
    if (!array_key_exists($id , config('students.students'))) {
      abort('404');
    }
    else {
      $student = config('students.students');
      $student = $student[$id];
      return view('students.show', compact('student'));
    }
  }
}
