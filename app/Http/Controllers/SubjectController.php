<?php

namespace App\Http\Controllers;

use App\Note;
use App\Student;
use App\Subject;

class SubjectController extends Controller
{
    /**
     * Retorna el promedio historico de un alumno en la materia especificada.
     *
     * @param Student $student
     * @param Subject $subject
     * @return Json
     */
    public function averageNotes(Student $student, Subject $subject)
    {
        $historicalAverage = Note::where([['subject_id', $subject->id], ['student_id', $student->id]])->avg('note');
        return response()->json(['data'=>['historicalAverage'=>$historicalAverage]]);
    }
}