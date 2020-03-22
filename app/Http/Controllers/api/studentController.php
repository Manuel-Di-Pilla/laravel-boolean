<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function gender (Request $request) {
        $data = $request -> all();
        $students = config('students.students');
        $result = [
            'error' => '',
            'response' => []
        ];
        foreach ($students as  $student) {
            if ($data['eta'] == $student['eta']){
                $result['response'][] = $student;
            }
        }
        return response()->json($result);
    }

}
