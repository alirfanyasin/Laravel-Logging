<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        dd($students);
    }

    //     public function index()
    //     {
    //         return view('students', [
    //             'data' => Student::all()
    //         ]);
    //     }
}
