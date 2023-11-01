<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactenos extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "contactenos";

    protected $fillable = ['id','nombres', 'apellidos', 'cedula', 'correo','usuario','observaciones'];
}

