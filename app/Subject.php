<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    /**
     * Retorna el profesor de una materia.
     *
     * @return void
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }


    /**
     * Retorna todas la notas de una materia.
     *
     * @return void
     */
    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    
}
