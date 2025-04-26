<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    // Tu peux définir les champs qui peuvent être mass-assignés ici
    protected $fillable = ['title', 'description', 'course_id', 'video', 'pdf'];
}
