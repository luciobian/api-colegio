<?php

namespace App\Http\Controllers;

use App\Note;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Carga la nota del alumno indicado en la materia especificada.
     *
     * @param Request $request
     * @param Subject $subject
     * @param Student $student
     * @return Json
     */
    public function store(Request $request, Subject $subject, Student $student)
    {
        $note = Note::create([
            'subject_id'=>$subject->id,
            'student_id'=>$student->id,
            'note'=>$request->get('note')
        ]);

        return response()->json(['data'=>['note'=>$note]], 200);
    }
}
