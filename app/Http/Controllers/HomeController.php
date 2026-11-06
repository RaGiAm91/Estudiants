<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //return view('home');
        //$estudiants = Student::all();
        return redirect()->route('student.index');
        
    }
   
}
