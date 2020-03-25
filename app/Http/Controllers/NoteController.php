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
     * @return Json
     */
    public function store(Request $request)
    {
        $note = Note::create([
            'subject_id'=>$request->get('subject_id'),
            'student_id'=>$request->get('student_id'),
            'note'=>$request->get('note')
        ]);

        return response()->json(['data'=>['message'=>'Nota cargada correctamente','note'=>$note]], 200);
    }

    /**
     * Elimina la nota especificada
     * 
     * @param Note $note
     * @return Json
     */
    public function delete(Note $note)
    {
        $note->delete();
        return response()->json(['data'=>['message'=>'Nota eliminada correctamente', 'note'=>$note]], 200);
    }
}
