<?php

namespace App\Models;
use App\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nombre'];
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
