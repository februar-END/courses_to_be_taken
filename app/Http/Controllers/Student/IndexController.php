<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Services\StudentService;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $students = Student::with('subjects')->orderBy('created_at', 'DESC')->get();
        $subjects = Subject::orderBy('created_at', 'DESC')->get();
        return view('student.index')
                ->with('students', $students)
                ->with('subjects',$subjects);
        
    }
}
