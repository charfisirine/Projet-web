<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID','date_debut','date_fin','nombre_personnes','chambreID','hotelID'
        ];


    public function chambres(){
        return $this->belongsTo(Chambre::class,"chambreID");
    }
    public function hotels(){
        return $this->belongsTo(Hotel::class,"hotelID");

    }
    public function utilisateurs(){
        return $this->belongsTo(Utilisateur::class,"userID");

    }

}
