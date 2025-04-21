<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    protected $fillable = [
        'nom',
        'specialite',
        'biographie',
        'photo',
    ];
}
