<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Student\CreateRequest;
use App\Models\Student;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $student = Student::find($request->studentId);
        $subjectId = $request->subjectId;
        $score = $request->score;
        $student->subjects()->attach($subjectId, ['student_id' => $request->studentId,'subject_id' => $request->subjectId,'score' => $request->score]);
        return redirect()->route('student.index');
    }
}
