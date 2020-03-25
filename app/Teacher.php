<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    /**
     * Retorna las materias a cargo de un profesor.
     *
     * @return void
     */
    public function subject()
    {
        return $this->belongsTo('App\Teacher');
    }
}
