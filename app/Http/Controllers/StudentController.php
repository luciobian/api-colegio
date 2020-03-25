<?php

namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{
    /**
     * Retorna todas las notas del alumno especificado.
     * @param Student $student
     * @return Json
     */
    public function notes(Student $student)
    {
        return $student->with(['note'=>function ($query) {
            return $query->select(['id','note', 'subject_id', 'student_id']);
        }, 'note.subject'=>function ($query) {
            return $query->select('id', 'name');
        } ])->get(['id', 'name']);
    }
}
