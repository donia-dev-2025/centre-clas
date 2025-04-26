<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'image',
        'formateur_id',
    ];
 //cour contient plusieur videos
 public function formateur()
 {
     return $this->belongsTo(Formateur::class);
 }
}
