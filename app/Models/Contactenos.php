<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactenos extends Model
{
    use HasFactory;
    protected $table = "contactenos";

    protected $fillable = ['id','nombres', 'apellidos', 'cedula', 'correo','usuario','observaciones'];
}

