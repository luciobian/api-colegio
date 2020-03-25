<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * Retona la nota de un estudiante.
     *
     * @return void
     */
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    /**
     * Retona las notas de una materia.
     *
     * @return void
     */
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
