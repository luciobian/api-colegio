<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    /**
     * Retorna la nota de un alumno
     *
     * @return void
     */
    public function note()
    {
        return $this->hasOne('App\Note');
    }
}
