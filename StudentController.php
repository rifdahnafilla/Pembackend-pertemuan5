<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
      $students = Student::all();

      $data = [
          'message' => 'Get all students',
          'data' => $students
      ];
      return response()->json($students, 200);
    }

    public function store(Request $request){
        $input =[
            'nama' => $request->nama,
            'nim'=> $request->nim,
            'email'=> $request->email,
            'jurusan' => $request->jurusan,
            'domisili'=> $request->domisili
        ];
       $students = Student::create($input);

        $data = [
            'message'=> 'Student is created',
            'data' => $students
        ];

        return response()->json($data, 2001);
    }
}
