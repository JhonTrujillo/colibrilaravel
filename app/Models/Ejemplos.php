<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplos extends Model
{
    use HasFactory;

    protected $table = "ejemplos";

    protected $fillable = ['id','nombres', 'edad', 'tipo_documento', 'documento'];
}
