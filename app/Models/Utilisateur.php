<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','email','cin','ville','numtelephone','age'
        ];

    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class,"userID");
    }
}
