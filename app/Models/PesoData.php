<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesoData extends Model
{
    protected $table = 'ejercicios';
    //    public $timestamps = false;

    use HasFactory;
    protected $fillable = ['Peso', 'pesoTotal', 'series', 'repeticiones'];

}
