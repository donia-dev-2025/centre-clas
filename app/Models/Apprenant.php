<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'niveau',
        'bio',
        'photo',
        'date_naissance',
        'genre',
        'telephone',
        'adresse'
    ];

public function formations()
{
    return $this->belongsToMany(Formation::class);
}
public function apprenants()
{
    return $this->belongsToMany(Apprenant::class);
}
}
