<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombreP',
        'apellido',
        'IdenP',
        'emailP',
        'areaP'
        ];
    }

