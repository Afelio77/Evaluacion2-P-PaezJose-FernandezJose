<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nombre', 'dni', 'fecha_nacimiento', 'medico_id'];

    public function medico(){
        return $this->belongsTo(Medico::class);
    }
    
}
